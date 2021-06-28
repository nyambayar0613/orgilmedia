<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use Illuminate\Http\Request;
use App\Helper\Helper;

class ProductController extends Controller
{
    public function getProductList() {
        $products = DB::table('products')
            ->where('is_deleted', 0)
            ->where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.products.productList', compact('products'));
    }

    public function getProductAdd() {
        return view('admin.products.productAdd');
    }

    public function getProductEdit($id) {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();

        $attach_files = DB::table('attach_file')
            ->where('is_deleted', 0)
            ->where('content_id', $id)
            ->where('content_type', 'product')
            ->get();

        return view('admin.products.productEdit', compact('product', 'attach_files'));
    }

    public function getProductData($id) {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();

        return response()->json($product);
    }


    /* POST */
    public function productInsert(Request $request) {
        $product = new Product();

        if ($request->hasFile('product_image')) {
            $fileName = Helper::imageUpload(request()->product_image, 'product', 650, 200);
        } else {
            $fileName = 'no_image.jpg';
        }

        $product->product_name = $request->product_name;
        $product->product_name_en = $request->product_name_en;
        $product->product_price = $request->product_price;
        $product->product_image = $fileName;
        $product->product_description = $request->product_description;

        $isSaved = $product->save();

        $productID = $product->id;

        if ($request->hasFile('product_image_optional')) {
            $images = $request->file('product_image_optional');

            foreach ($images as $image) {
                $fileName = Helper::imageUpload($image, 'product_multi', 650, 200);
                DB::table('attach_file')->insert(['content_id' => $productID, 'content_type' => 'product', 'file' => $fileName]);
            }
        }

        if ($isSaved) {
            return redirect()->route('admin.product.list')->with('successMessage', 'Амжилттай нэмэгдлээ');
        }

        return redirect()->route('admin.product.list')->with('error', 'Алдаа гарлаа');
    }

    public function productUpdate(Request $request) {
        $product = Product::find($request->id);

        $oldProductImage = $product->product_image;
        if ($request->hasFile('product_image')) {
            $fileName = Helper::imageUpload(request()->product_image, 'product', false, false);
        } else {
            $fileName = $oldProductImage;
        }

        if ($request->hasFile('product_image_optional')) {
            $images = $request->file('product_image_optional');

            foreach ($images as $image) {
                $multiFileName = Helper::imageUpload($image, 'product_multi', false, false);
                DB::table('attach_file')->insert(['content_id' => $product->id, 'content_type' => 'product', 'file' => $multiFileName]);
            }
        }

        $product->product_name = $request->product_name;
        $product->product_name_en = $request->product_name_en;
        $product->product_price = $request->product_price;
        $product->product_image = $fileName;
        $product->product_description = $request->product_description;

        if ($product->save()) {
            return redirect()->route('admin.product.list')->with('successUpdateMessage', 'Амжилттай шинэчлэгдлээ');;
        }

        return redirect()->route('admin.product.list')->with('error', 'Алдаа гарлаа');
    }
}
