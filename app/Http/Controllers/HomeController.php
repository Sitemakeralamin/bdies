<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Committee;
use App\Models\Contact;
use App\Models\Meetting;
use App\Models\Member;
use App\Models\Program;
use App\Models\Publication;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::orderBy('id','DESC')->get();
        return view('forntend.home.home',['sliders'=>$sliders]);
    }

//    contact function start

    public function contactView()
    {
        return view('forntend.contact.view');
    }

    public function saveFormData(Request $request)
    {
        $request->validate([
           'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $contactDetails = new Contact();
        $contactDetails->name = $request->name;
        $contactDetails->phone = $request->phone;
        $contactDetails->email = $request->email;
        $contactDetails->message = $request->message;
        $contactDetails->save();
        return redirect()->back()->with('message','Thank you for your message. We will get in touch with you shortly');

    }

    public function smsShow()
    {
        $message = Contact::all();
        return view('backend.contact.message',['message'=>$message]);
    }

    public function seenMessage($id)
    {
        $seenMessage = Contact::find($id);
        if ($seenMessage->status == 0)
        {
            $seenMessage->status = 1;
            $seenMessage->save();
        }
        return view('backend.contact.view-message',['seenMessage'=> $seenMessage]);
    }

    public function publicationPage($publication)
    {

        if ($publication == 'journal')
        {
            $journals = Publication::where('type','journal')->get();
            return view('forntend.publication.view-page',['journals'=>$journals]);

        }elseif ($publication == 'abstract')
        {
            $abstracts = Publication::where('type','abstract')->get();
            return view('forntend.publication.view-page',['abstracts'=>$abstracts]);

        }elseif ($publication == 'news')
        {
            $news = Publication::where('type','news')->get();
            return view('forntend.publication.view-page',['news'=>$news]);
        }
    }


    public function JournalsinglePage($publication,$id)
    {

        if ($publication == 'journal')
        {
            $singlePage = Publication::find($id);
            $journals = Publication::where('type','journal')->get();
            return view('forntend.publication.single-page',['singlePage'=>$singlePage,'journals'=>$journals]);
        }
        if ($publication == 'abstract')
        {
            $singlePage = Publication::find($id);
            $abstracts = Publication::where('type','abstract')->get();
            return view('forntend.publication.single-page',['singlePage'=>$singlePage,'abstracts'=>$abstracts]);
        }
        if ($publication == 'news')
        {
            $singlePage = Publication::find($id);
            $news = Publication::where('type','news')->get();
            return view('forntend.publication.single-page',['singlePage'=>$singlePage,'news'=>$news]);
        }


    }


//    meetting event function

    public function meettingEvent()
    {
        $meetting = Meetting::OrderBy('id','DESC')->first();
        return view('forntend.meetting.view-page',['meetting'=>$meetting]);
    }



    //programme function start

    public function programePage($programe)
    {
        if ($programe == 'workpage')
        {
            $workpage = Program::where('type','workshop')->OrderBy('id','DESC')->get();
            return view('forntend.programe.view-programe',['workpage'=>$workpage]);
        }
        elseif ($programe == 'seminar')
        {
            $seminar = Program::where('type','Seminar')->OrderBy('id','DESC')->get();
            return view('forntend.programe.view-programe',['seminar'=>$seminar]);
        }
    }


    //member page route function

    public function MemberPage($member)
    {
        if ($member == 'fellow')
        {
            $fellow_members = Member::where('member_type','fellow member')->OrderBy('id','DESC')->get();
           return view('forntend.member.view-member',['fellow_members'=>$fellow_members]);
        }
        elseif ($member == 'life')
        {
            $life_members = Member::where('member_type','life member')->OrderBy('id','DESC')->get();
            return view('forntend.member.view-member',['life_members'=>$life_members]);
        }
        elseif ($member == 'student')
        {
            $student_members = Member::where('member_type','student member')->where('status','1')->OrderBy('id','DESC')->get();
            return view('forntend.member.view-member',['student_members'=>$student_members]);
        }
    }

    public function singlePageMember($id,$details)
    {
        if ($details == 'fellow')
        {
            $fellow_details = Member::find($id);
            //return $fellow_details;
            return view('forntend.member.single-page-view',['fellow_details'=>$fellow_details]);
        }elseif ($details == 'life')
        {
            $life_details = Member::find($id);
            //return $fellow_details;
            return view('forntend.member.single-page-view',['life_details'=>$life_details]);
        }elseif ($details == 'student')
        {
            $student_details = Member::find($id);
            //return $fellow_details;
            return view('forntend.member.single-page-view',['student_details'=>$student_details]);
        }
    }


//    committee function start here

    public function committee($committeeCategory)
    {
        if ($committeeCategory == 'executive_committee')
        {
            $executiveCategory = Committee::where('type','executive_committee')->OrderBy('id','DESC')->get();

            return view('forntend.committee.index',['executiveCategory'=>$executiveCategory]);
        }
        elseif ($committeeCategory == 'perivious_committee')
        {
            $previousCategory = Committee::where('type','perivious_committee')->OrderBy('id','DESC')->get();
            // dd($previousCategory);
            return view('forntend.committee.index',['previousCategory'=>$previousCategory]);
        }

    }

    public function AboutSection($aboutSection)
    {
        if ($aboutSection == 'about_us')
        {
            $about_us = About::where('type','about_us')->orderBy('id','DESC')->first();
            return view('forntend.about.view-page',['about_us'=>$about_us]);
        }elseif ($aboutSection == 'mission')
        {
            $mission = About::where('type','mission')->orderBy('id','DESC')->first();
            return view('forntend.about.view-page',['mission'=>$mission]);
        }
        elseif ($aboutSection == 'vision')
        {
            $vision = About::where('type','vision')->orderBy('id','DESC')->first();
            return view('forntend.about.view-page',['vision'=>$vision]);
        }
    }

    public function message()
    {
        return view('forntend.message');
    }
}
