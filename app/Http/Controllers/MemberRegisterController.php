<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberRegisterController extends Controller
{
    private $member;
    public function index()
    {
        return view('forntend.home.member-register');
    }
    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'father_name'=> 'required',
            'nationality'=>'required',
            'date_of_birth'=>'required',
            'present_address'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'member_type'=>'required',
            'applicant_date'=>'required',

        ]);

         Member::saveData($request);
         return redirect()->back()->with('message','Member Registration successfully');


    }

    public function fellowMember()
    {
        $members = Member::where('member_type','fellow member')->get();
        return view('backend.member.fellow-member',['members'=>$members]);
    }

    public function lifeMember()
    {
        $members = Member::where('member_type','life member')->get();
        return view('backend.member.life-member',['members'=>$members]);
    }
    public function studentMember()
    {
        $members = Member::where('member_type','student member')->get();
        return view('backend.member.student-member',['members'=>$members]);
    }
//    approve unapproved

    public function approveMember($id)
    {
        $member = Member::find($id);

        if ($member->member_type == 'fellow member')
        {
            if ($member->status == '0')
            {
                $member->status = 1;
                $member->save();

            }else
            {
                $member->status = 0;
                $member->save();

            }
            return redirect()->back()->with('message','Status update successfully');
        }

       elseif($member->member_type == 'life member')
        {
            if ($member->status == '0')
            {
                $member->status = 1;
                $member->save();

            }else
            {
                $member->status = 0;
                $member->save();

            }
            return redirect()->back()->with('message','Status update successfully');
        }
        elseif($member->member_type == 'student member')
        {
            if ($member->status == '0')
            {
                $member->status = 1;
                $member->save();

            }else
            {
                $member->status = 0;
                $member->save();

            }
            return redirect()->back()->with('message','Status update successfully');
        }



    }

    public function deleteMember($id)
    {
        $member = Member::find($id);
        if($member->member_type == 'student member')
        {
            $member->delete();
            return redirect()->back()->with('message','member delete successfully');
        }
        elseif($member->member_type == 'life member')
        {
            $member->delete();
            return redirect()->back()->with('message','member delete successfully');
        }
        elseif($member->member_type == 'fellow member')
        {
            $member->delete();
            return redirect()->back()->with('message','member delete successfully');
        }
    }

    public function viewMember($id)
    {
        $member = Member::find($id);
        if($member->member_type == 'student member')
        {

            return view('backend.member.view',['member'=>$member]);
        }
        elseif($member->member_type == 'life member')
        {
            return view('backend.member.view',['member'=>$member]);
        }
        elseif($member->member_type == 'fellow member')
        {
            return view('backend.member.view',['member'=>$member]);
        }
    }

}
