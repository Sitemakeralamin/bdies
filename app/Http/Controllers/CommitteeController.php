<?php

namespace App\Http\Controllers;

use App\Imports\CommitteesImport;
use App\Models\Committee;
use App\Models\Program;
use Illuminate\Http\Request;
use Flash;
use Maatwebsite\Excel\Facades\Excel;
class CommitteeController extends Controller
{
    //
    public function allCommittee()
    {
        return view('backend.committee.add');
    }
    public function save(Request $request)
    {
        $request->validate([
            'type' =>'required',
            'file'=>'required|mimes:pdf',
        ]);

        $committee = new Committee();
        $committee->type = $request->type;
        $committee->file = singleImage($request->file('file'));
        $committee->save();

        return redirect()->back()->with('message','Committee save successfully');

    }

    public function viewCommittee()
    {
        $committees = Committee::all();
        return view('backend.committee.view',['committees'=>$committees]);
    }

    public function edit($id)
    {
        $committee = Committee::find($id);
        return view('backend.committee.add',['committee'=>$committee]);
    }
    public function delete($id)
    {
        $committee = Committee::find($id);
        if(file_exists($committee->file))
        {
            unlink($committee->file);
        }
        $committee->delete();
        return redirect()->back()->with('message','committee delete successfully');
    }

    public function update(Request $request,$id)
    {

        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_bn' => 'required|string|max:255',
             'affiliation' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'committee_type' => 'required|string|in:executive_committee,perivious_committee',
           ]);
           $committee = Committee::find($id);
           $committee->e_name = $request->name_en;
           $committee->b_name = $request->name_bn;
           $committee->affiliation = $request->affiliation;
           $committee->email = $request->email;
           $committee->phone = $request->phone;
           $committee->type = $request->committee_type;
           $committee->save();
        return redirect('/committee-view')->with('message','Committee Update successfully');

    }

    public function submit(Request $request)
    {


            $request->validate([
                'name_en' => 'required|string|max:255',
                'name_bn' => 'required|string|max:255',
                'affiliation' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:15',
                'committee_type' => 'required|string|in:executive_committee,perivious_committee',
               ]);
               $committee = new Committee();
               $committee->e_name = $request->name_en;
               $committee->b_name = $request->name_bn;
               $committee->affiliation = $request->affiliation;
               $committee->email = $request->email;
               $committee->phone = $request->phone;
               $committee->type = $request->committee_type;
               $committee->save();

               return redirect()->back()->with('message','committee saved successfully!');




    }

    public function importCommittee(Request $request)
    {

            $request->validate([
                'csv' => 'required|file|mimes:csv',
            ]);

            Excel::import(new CommitteesImport(),$request->file('csv'));

            return redirect()->back()->with('message','committee Imported successfully.');

    }
}
