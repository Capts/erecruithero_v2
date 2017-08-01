<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$profile_applicant = new Profile();

        $profile_applicant->user_id = 2;
        $profile_applicant->age = 0;
        $profile_applicant->bio = 'not yet specified';
        $profile_applicant->bday = 'not yet specified';
        $profile_applicant->street = 'not yet specified';
        $profile_applicant->barangay = 'not yet specified';
        $profile_applicant->city = 'not yet specified';
        $profile_applicant->province = 'not yet specified';
        $profile_applicant->country = 'not yet specified';
        $profile_applicant->civil_status = 'not yet specified';
        $profile_applicant->school_attended = 'not yet specified';
        $profile_applicant->course = 'not yet specified';
        $profile_applicant->major = 'not yet specified';
        $profile_applicant->school_status = 'not yet specified';
        $profile_applicant->save();


        $profile_employer = new Profile();

        $profile_employer->user_id = 1;
        $profile_employer->age = 0;
        $profile_employer->bio = 'not yet specified';
        $profile_employer->bday = 'not yet specified';
        $profile_employer->street = 'not yet specified';
        $profile_employer->barangay = 'not yet specified';
        $profile_employer->city = 'not yet specified';
        $profile_employer->province = 'not yet specified';
        $profile_employer->country = 'not yet specified';
        $profile_employer->civil_status = 'not yet specified';
        $profile_employer->school_attended = 'not yet specified';
        $profile_employer->course = 'not yet specified';
        $profile_employer->major = 'not yet specified';
        $profile_employer->school_status = 'not yet specified';
        $profile_employer->save();




    }
}
