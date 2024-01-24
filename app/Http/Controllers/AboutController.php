<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Program;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function allAbout()
    {
        return view('backend.about.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'type' =>'required',
            'title'=>'required',
        ]);

        $about = new About();
        $about->type = $request->type;
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;
        $about->image = singleImage($request->file('image'));
        $about->save();

        return redirect()->back()->with('message','About save successfully');

    }

    public function viewAbout()
    {
        $abouts = About::all();
        return view('backend.about.view',['abouts'=>$abouts]);
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('backend.about.add',['about'=>$about]);
    }
    public function delete($id)
    {
        $about = About::find($id);
        if(file_exists($about->image))
        {
            unlink($about->image);
        }
        $about->delete();
        return redirect()->back()->with('message','About delete successfully');
    }

    public function update(Request $request,$id)
    {

        $about = About::find($id);
        $about->type = $request->type;
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;
        if ($request->image)
        {
            if(file_exists($about->image))
            {
                unlink($about->image);
            }
            $about_imageUrl = singleImage($request->file('image'));
        }else
        {
            $about_imageUrl = $about->image;
        }
        $about->image = $about_imageUrl;
        $about->save();

        return redirect('/about-view')->with('message','About Update successfully');

    }
}
