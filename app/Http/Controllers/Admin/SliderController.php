<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;
use DB;
use Request as SearchRequest;
use Illuminate\Http\Request;
use App\Helper\Helper;

class SliderController extends Controller{

    public function getSliderList() {
        $sliders = DB::table('sliders')
            ->where('is_deleted', 0)
            ->orderBy('id', 'DESC')
            ->paginate(5);

        $sliderCount = DB::table('sliders')
            ->where('is_deleted', 0)
            ->get();

        $count = count($sliderCount);

        return view('admin.sliders.sliderList', compact('sliders', 'count'));
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
        $slider->slider_text = $request->slider_text;

        if ($request->hasFile('slider_image')) {
            $fileName = Helper::ImageUploader(request()->slider_image, 'slider', 1921, 1283, 600, 401);
        } else {
            $fileName = 'no_slider_image.jpg';
        }

        $slider->slider_image = $fileName;

        $slider->slider_url = $request->slider_url;

        if ($slider->save()) {
            return redirect()->route('admin.slider.list')->with('successMessage', 'Амжилттай нэмэгдлээ');
        }

        return redirect()->route('admin.slider.list')->with('error', 'Алдаа гарлаа');
    }

    public function sliderUpdate(Request $request) {
        $slider = Slider::find($request->id);

        $slider->slider_title = $request->slider_title;
        $slider->slider_text = $request->slider_text;

        $oldSliderImage = $slider->slider_image;

        if ($request->hasFile('slider_image')) {
            $fileName = Helper::imageUploader(request()->slider_image, 'slider', 1921, 1283, 600, 401);
        } else {
            $fileName = $oldSliderImage;
        }

        $slider->slider_image = $fileName;
        $slider->slider_url = $request->slider_url;

        if ($slider->save()) {
            return redirect()->route('admin.slider.list')->with('successMessage', 'Амжилттай шинэчлэгдлээ');
        }

        return redirect()->route('admin.slider.list')->with('error', 'Алдаа гарлаа');
    }

    public function getSearch(SearchRequest $request) {
        $sliders = Slider::where('slider_title', 'like', '%' . $request::get('s') . '%')
            ->orWhere('slider_text', 'like', '%' . $request::get('s') . '%')
            ->orWhere('slider_url', 'like', '%' . $request::get('s') . '%')
            ->paginate(10);

        $count = count($sliders);

        return view('admin.sliders.sliderList', compact('sliders', 'count'));
    }

}
