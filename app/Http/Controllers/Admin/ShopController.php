<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;
use DB;
use Illuminate\Http\Request;
use App\Helper\Helper;

class ShopController extends Controller{

    public function getSliderList() {
        $sliders = DB::table('sliders')
            ->where('is_deleted', 0)
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.sliders.sliderList', compact('sliders'));
    }

    public function getSliderAdd() {
        return view('admin.sliders.sliderAdd');
    }

    public function getSliderEdit($id) {
        $slider = DB::table('sliders')
            ->where('id', $id)
            ->first();

        return view('admin.sliders.sliderEdit', compact('slider'));
    }

    /* POST */

    public function sliderInsert(Request $request) {
        $slider = new Slider();

        $slider->slider_title = $request->slider_title;

        if ($request->hasFile('slider_image')) {
            $fileName = Helper::imageUpload(request()->slider_image, 'slider', 1950, 550);
        } else {
            $fileName = 'no_slider_image.jpg';
        }

        $slider->slider_image = $fileName;

        if ($slider->save()) {
            return redirect()->route('admin.slider.list')->with('successMessage', 'Амжилттай нэмэгдлээ');
        }

        return redirect()->route('admin.slider.list')->with('error', 'Алдаа гарлаа');
    }

    public function sliderUpdate(Request $request) {
        $slider = Slider::find($request->id);

        $oldSliderImage = $slider->slider_image;

        if ($request->hasFile('slider_image')) {
            $fileName = Helper::imageUpload(request()->slider_image, 'slider', 1950, 550);
        } else {
            $fileName = $oldSliderImage;
        }

        $slider->slider_image = $fileName;

        if ($slider->save()) {
            return redirect()->route('admin.slider.list')->with('successMessage', 'Амжилттай шинэчлэгдлээ');
        }

        return redirect()->route('admin.slider.list')->with('error', 'Алдаа гарлаа');
    }

}
