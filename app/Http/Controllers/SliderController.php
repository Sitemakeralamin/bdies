<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function addSlider()
    {
        return view('backend.slider.add-slider');
    }

    public function store(Request $request)
    {
        $request->validate([
           'file'=>'required'
        ]);

        $slider = new Slider();
        $slider->image = singleImage($request->file('file'));
        $slider->save();
        return redirect()->back()->with('message','Slider Save Successfully');

    }
    public function Sliderview()
    {
        $slider_views = Slider::all();
        return view('backend.slider.view',['slider_views'=>$slider_views]);
    }

    public function sldierDelete($id)
    {
        $slider = Slider::find($id);
        if (file_exists($slider->image))
        {
            unlink($slider->image);
        }
        $slider->delete();
        return redirect()->back()->with('message','Slider Delete Successfully');
    }
}
