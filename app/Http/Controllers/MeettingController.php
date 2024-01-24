<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Meetting;
use Illuminate\Http\Request;

class MeettingController extends Controller
{
    //
    public function allMeetting()
    {
        return view('backend.meeting.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:pdf',
        ]);

        $meetting = new Meetting();
        $meetting->title = $request->title;
        $meetting->file = singleImage($request->file('file'));
        $meetting->save();

        return redirect()->back()->with('message','Meetting save successfully');

    }

    public function viewMeetting()
    {
        $meettings = Meetting::all();
        return view('backend.meeting.view',['meettings'=>$meettings]);
    }

    public function edit($id)
    {
        $meetting = Meetting::find($id);
        return view('backend.meeting.add',['meetting'=>$meetting]);
    }
    public function delete($id)
    {
        $meetting = Meetting::find($id);
        if(file_exists($meetting->file))
        {
            unlink($meetting->file);
        }
        $meetting->delete();
        return redirect()->back()->with('message','Meetting delete successfully');
    }

    public function update(Request $request,$id)
    {

        $meetting = Meetting::find($id);
        $meetting->title = $request->title;
        if ($request->file)
        {
            if(file_exists($meetting->file))
            {
                unlink($meetting->file);
            }
            $meetting_imageUrl = singleImage($request->file('file'));
        }else
        {
            $meetting_imageUrl = $meetting->file;
        }
        $meetting->file = $meetting_imageUrl;
        $meetting->save();

        return redirect('/meetting-view')->with('message','Meetting Update successfully');

    }
}
