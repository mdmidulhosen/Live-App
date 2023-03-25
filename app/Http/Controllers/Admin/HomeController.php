<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

use Intervention\Image\Facades\Image;


class HomeController extends Controller
{
    public function sliderCreate()
    {
        return view('admin.pages.home_setting.pages.CreateSlider');
    }

    public function uploadSliderImage(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/images/banner/' . $filename);

        $img = Image::make($image->getRealPath());

        $img->resize(450, 450);

        // save resized image
        $img->save($path);

        $homeSlider = new HomeSlider();
        $homeSlider->title = $request->title;
        $homeSlider->subtitle = $request->subtitle;
        $homeSlider->image = $filename;
        $homeSlider->save();

        return redirect()->back()->with('success', 'Home Slider Images Upload Successfully');
    }

}
