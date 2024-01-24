<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    private static $member;
    private static $degree;
    private static $university;
    private static $year;
    private static $position;
    private static $job;
    private static $organization;
    private static $job_year;
    private static $dir;
    public static function saveData($request)
    {
        self::$dir = "frontend/member_image/";
        self::$member = new Member();
        self::$member->name = $request->name;
        self::$member->father_name = $request->father_name;
        self::$member->email = $request->email;
        self::$member->mobile = $request->mobile;
        self::$member->nationality = $request->nationality;
        self::$member->date_of_birth = $request->date_of_birth;
        self::$member->applicant_date = $request->applicant_date;
        self::$member->present_address = $request->present_address;
        self::$member->member_type = $request->member_type;
        self::$member->telephone = $request->telephone;
        self::$member->res = $request->res;
        self::$member->malling_address = $request->malling_address;
        if ($request->degrees)
        {
            self::$degree = implode(", ", $request->degrees);
            self::$degree = substr_replace(self::$degree,"",-1);
            self::$member->degree = self::$degree;

        }
        if ($request->univercities)
        {
            self::$university = implode(", ", $request->univercities);
            self::$university = substr_replace(self::$university,"",-1);
            self::$member->university = self::$university;

        }
        if ($request->years)
        {
            self::$year = implode(", ", $request->years);
            self::$year = substr_replace(self::$year,"",-1);
            self::$member->year = self::$year;

        }
        if ($request->positions)
        {
            self::$position = implode(", ", $request->positions);
            self::$position = substr_replace(self::$position,"",-1);
            self::$member->position = self::$position;

        }
        if ($request->organizations)
        {
            self::$organization = implode(", ", $request->organizations);
            self::$organization = substr_replace(self::$organization,"",-1);
            self::$member->organization = self::$organization;

        }
        if ($request->service_years)
        {
            self::$job_year = implode(", ", $request->service_years);
            self::$job_year = substr_replace(self::$job_year,"",-1);
            self::$member->service_year = self::$job_year;

        }
        if ($request->jobs)
        {
            self::$job = implode(", ", $request->jobs);
            self::$job = substr_replace(self::$job,"",-1);
            self::$member->job_nature = self::$job;

        }
        self::$member->bodies = $request->bodies;
        if ($request->publication_file)
        {
            self::$member->publication_file = singleImage($request->file('publication_file'),self::$dir);
        }
        if ($request->signature_file)
        {
            self::$member->signature_file = singleImage($request->file('signature_file'),self::$dir);
        }
        self::$member->save();

    }
}
