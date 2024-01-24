<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberRegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ProgrameController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MeettingController;
use App\Http\Controllers\SliderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');



//contact route
Route::get('/contact-us',[HomeController::class,'contactView'])->name('contact');
Route::post('/submit',[HomeController::class,'saveFormData'])->name('submit.form');

//Publications route
Route::get('/journalPage/{journal}',[HomeController::class,'publicationPage'])->name('journalPage');
Route::get('/abstractPage/{abstract}',[HomeController::class,'publicationPage'])->name('abstractPage');
Route::get('/newsPage/{news}',[HomeController::class,'publicationPage'])->name('newsPage');
Route::get('/journal-singlePage/{journal}/{id}',[HomeController::class,'JournalsinglePage'])->name('journal.singlePage');
Route::get('/abstract-singlePage/{abstract}/{id}',[HomeController::class,'JournalsinglePage'])->name('abstract.singlePage');
Route::get('/news-singlePage/{news}/{id}',[HomeController::class,'JournalsinglePage'])->name('news.singlePage');

//meetting event page route

Route::get('meetingeventPage',[HomeController::class,'meettingEvent'])->name('meetingeventPage');

//Programe page Route

Route::get('workpage/{workpage}',[HomeController::class,'programePage'])->name('workpage');
Route::get('seminarpage/{seminar}',[HomeController::class,'programePage'])->name('seminarpage');

//show all member list route frontend
Route::get('/fellow-member/{fellow}',[HomeController::class,'MemberPage'])->name('frontend.fellow-member');
Route::get('/life-member/{life}',[HomeController::class,'MemberPage'])->name('frontend.life-member');
Route::get('/student-member/{student}',[HomeController::class,'MemberPage'])->name('frontend.student-member');
Route::get('/fellow-details/{id}/{fellow}',[HomeController::class,'singlePageMember'])->name('fellow-details');
Route::get('/life-details/{id}/{life}',[HomeController::class,'singlePageMember'])->name('life-details');
Route::get('/student-details/{id}/{student}',[HomeController::class,'singlePageMember'])->name('student-details');
//member registration route
Route::get('/membar-register',[MemberRegisterController::class,'index'])->name('member.register');
Route::post('/save-member',[MemberRegisterController::class,'save'])->name('save.member');

//committee route

Route::get('/executive-committee/{executive}',[HomeController::class,'committee'])->name('executive-committee');
Route::get('/previous-committee/{previous}',[HomeController::class,'committee'])->name('previous-committee');

//about us route function
Route::get('about_us/{about_us}',[HomeController::class,'AboutSection'])->name('about_us');
Route::get('mission/{mission}',[HomeController::class,'AboutSection'])->name('mission');
Route::get('vision/{vision}',[HomeController::class,'AboutSection'])->name('vision');

 // message route
 Route::get('/frontend/message', [HomeController::class, 'message'])->name('frontend.message');




Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


//    membership pending see route

    Route::get('fellow-member',[MemberRegisterController::class,'fellowMember'])->name('fellow_member');
    Route::get('life-member',[MemberRegisterController::class,'lifeMember'])->name('life_member');
    Route::get('student-member',[MemberRegisterController::class,'studentMember'])->name('student_member');

//    approved route
    Route::get('approve-member/{id}',[MemberRegisterController::class,'approveMember'])->name('approve.member');
    Route::get('delete-member/{id}',[MemberRegisterController::class,'deleteMember'])->name('delete.member');
    Route::get('view-member/{id}',[MemberRegisterController::class,'viewMember'])->name('view.member');

//    publication route

    Route::get('publication-add',[PublicationController::class,'allPublication'])->name('publication.add');
    Route::post('publication-save',[PublicationController::class,'save'])->name('publication.save');
    Route::get('publication-view',[PublicationController::class,'viewPublication'])->name('publication.view');
    Route::get('publication-edit/{id}',[PublicationController::class,'edit'])->name('edit.publication');
    Route::post('ppublication-update/{id}',[PublicationController::class,'update'])->name('publication.update');
    Route::get('publication-delete/{id}',[PublicationController::class,'delete'])->name('delete.publication');

//    Programe route

    Route::get('programe-add',[ProgrameController::class,'allPrograme'])->name('programe.add');
    Route::post('programe-save',[ProgrameController::class,'save'])->name('programe.save');
    Route::get('programe-view',[ProgrameController::class,'viewPrograme'])->name('programe.view');
    Route::get('programe-edit/{id}',[ProgrameController::class,'edit'])->name('edit.programe');
    Route::post('programe-update/{id}',[ProgrameController::class,'update'])->name('programe.update');
    Route::get('programe-delete/{id}',[ProgrameController::class,'delete'])->name('delete.programe');

    //    committee route

    Route::get('committee-add',[CommitteeController::class,'allCommittee'])->name('committee');
    Route::post('committee-save',[CommitteeController::class,'save'])->name('committee.save');
    Route::get('committee-view',[CommitteeController::class,'viewCommittee'])->name('committee.view');
    Route::get('committee-edit/{id}',[CommitteeController::class,'edit'])->name('edit.committee');
    Route::post('committee-update/{id}',[CommitteeController::class,'update'])->name('committee.update');
    Route::get('committee-delete/{id}',[CommitteeController::class,'delete'])->name('delete.committee');
    //committee new modification route here
    Route::post('committee/save',[CommitteeController::class,'submit'])->name('committee.form.submit');
    Route::post('committee/import',[CommitteeController::class,'importCommittee'])->name('committee.import.submit');
    //    About route

    Route::get('about-add',[AboutController::class,'allAbout'])->name('about.add');
    Route::post('about-save',[AboutController::class,'save'])->name('about.save');
    Route::get('about-view',[AboutController::class,'viewAbout'])->name('about.view');
    Route::get('about-edit/{id}',[AboutController::class,'edit'])->name('edit.about');
    Route::post('about-update/{id}',[AboutController::class,'update'])->name('about.update');
    Route::get('about-delete/{id}',[AboutController::class,'delete'])->name('delete.about');

    //    Meeting route

    Route::get('meetting-add',[MeettingController::class,'allMeetting'])->name('meetting');
    Route::post('meetting-save',[MeettingController::class,'save'])->name('meetting.save');
    Route::get('meetting-view',[MeettingController::class,'viewMeetting'])->name('meetting.view');
    Route::get('meetting-edit/{id}',[MeettingController::class,'edit'])->name('edit.meetting');
    Route::post('meetting-update/{id}',[MeettingController::class,'update'])->name('meetting.update');
    Route::get('meetting-delete/{id}',[MeettingController::class,'delete'])->name('delete.meetting');

//    message view route

    Route::get('message',[HomeController::class,'smsShow'])->name('message');
    Route::get('message-view/{id}',[HomeController::class,'seenMessage'])->name('message.view');

    //    Slider add route

    Route::get('slider-add',[SliderController::class,'addSlider'])->name('slider.add');
    Route::post('slider-store',[SliderController::class,'store'])->name('slider.store');
    Route::get('slider-view',[SliderController::class,'Sliderview'])->name('slider.view');
    Route::get('slider-delete/{id}',[SliderController::class,'sldierDelete'])->name('slider.delete');
});

//Route::get('/dis',[DashboardController::class,'index']);

require __DIR__.'/auth.php';
