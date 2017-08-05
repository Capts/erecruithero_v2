<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\Address;
use App\School;

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

        $profile_applicant->user_id = 1;
        $profile_applicant->age = 0;
        $profile_applicant->bio = 'n/a';
        $profile_applicant->bday = 'n/a';
        $profile_applicant->civil_status = 'n/a';
        $profile_applicant->save();

        $address_applicant = new Address();
        $address_applicant->user_id = 1;
        $address_applicant->street = 'n/a';
        $address_applicant->barangay = 'n/a';
        $address_applicant->city = 'n/a';
        $address_applicant->province = 'n/a';
        $address_applicant->country = 'n/a';
        $address_applicant->save();

        $school_applicant = new School();
        $school_applicant->user_id = 1;
        $school_applicant->school = 'n/a';
        $school_applicant->degree = 'n/a';
        $school_applicant->field_of_study = 'n/a';
        $school_applicant->major = 'n/a';
        $school_applicant->school_status = 'n/a';
        $school_applicant->start_year = 'n/a';
        $school_applicant->end_year = 'n/a';
        $school_applicant->activities = 'n/a';
        $school_applicant->save();
        


        $profile_employer = new Profile();

        $profile_employer->user_id = 2;
        $profile_employer->age = 0;
        $profile_employer->bio = 'n/a';
        $profile_employer->bday = 'n/a';
        $profile_employer->civil_status = 'n/a';
        $profile_employer->save();

        $address_employer = new Address();
        $address_employer->user_id = 2;
        $address_employer->street = 'n/a';
        $address_employer->barangay = 'n/a';
        $address_employer->city = 'n/a';
        $address_employer->province = 'n/a';
        $address_employer->country = 'n/a';
        $address_employer->save();

        $schoo_employer = new School();
        $schoo_employer->user_id = 2;
        $schoo_employer->school = 'n/a';
        $schoo_employer->degree = 'n/a';
        $schoo_employer->field_of_study = 'n/a';
        $schoo_employer->major = 'n/a';
        $schoo_employer->school_status = 'n/a';
        $schoo_employer->start_year = 'n/a';
        $schoo_employer->end_year = 'n/a';
        $schoo_employer->activities = 'n/a';
        $schoo_employer->save();




    }
}
