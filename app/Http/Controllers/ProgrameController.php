<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgrameController extends Controller
{
    //
    public function allPrograme()
    {
        return view('backend.programe.add');
    }
 public function save(Request $request)
{
    $request->validate([
        'type' =>'required',
        'file'=>'required|mimes:pdf',
    ]);

    $programe = new Program();
    $programe->type = $request->type;
    $programe->name = $request->name;
    $programe->file = singleImage($request->file('file'));
    $programe->save();

    return redirect()->back()->with('message','Programe save successfully');

}

    public function viewPrograme()
    {
        $programes = Program::all();
        return view('backend.programe.view',['programes'=>$programes]);
    }

    public function edit($id)
    {
        $programe = Program::find($id);
        return view('backend.programe.add',['programe'=>$programe]);
    }
    public function delete($id)
    {
        $programe = Program::find($id);
        if(file_exists($programe->file))
        {
            unlink($programe->file);
        }
        $programe->delete();
        return redirect()->back()->with('message','Programe delete successfully');
    }

    public function update(Request $request,$id)
    {

        $programe = Program::find($id);
        $programe->type = $request->type;
        $programe->name = $request->name;
        if ($request->file)
        {
            if(file_exists($programe->file))
            {
                unlink($programe->file);
            }
            $programe_imageUrl = singleImage($request->file('file'));
        }else
        {
            $programe_imageUrl = $programe->file;
        }
        $programe->file = $programe_imageUrl;
        $programe->save();

        return redirect('/programe-view')->with('message','Programe Update successfully');

    }

}
