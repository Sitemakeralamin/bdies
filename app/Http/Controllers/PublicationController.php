<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    //
    public function allPublication()
    {
        return view('backend.publication.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'type' =>'required',
            'file'=>'required|mimes:pdf',
        ]);

        $publication = new Publication();
        $publication->type = $request->type;
        $publication->name = $request->name;
        $publication->file = singleImage($request->file('file'));
        $publication->save();

        return redirect()->back()->with('message','Publication save successfully');

    }

    public function viewPublication()
    {
        $publications = Publication::all();
        return view('backend.publication.view',['publications'=>$publications]);
    }

    public function edit($id)
    {
        $publication = Publication::find($id);
        return view('backend.publication.add',['publication'=>$publication]);
    }
    public function delete($id)
    {
        $publication = Publication::find($id);
        if(file_exists($publication->file))
        {
            unlink($publication->file);
        }
        $publication->delete();
        return redirect()->back()->with('message','Publication delete successfully');
    }

    public function update(Request $request,$id)
    {

        $publication = Publication::find($id);
        $publication->type = $request->type;
        $publication->name = $request->name;
        if ($request->file)
        {
            if(file_exists($publication->file))
            {
                unlink($publication->file);
            }
            $publication_imageUrl = singleImage($request->file('file'));
        }else
        {
            $publication_imageUrl = $publication->file;
        }
        $publication->file = $publication_imageUrl;
        $publication->save();

        return redirect('/publication-view')->with('message','Publication Update successfully');

    }
}
