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

        //elem
        $school_applicant->elem_school = 'school name elementary';
        $school_applicant->elem_address = 'school address elementary';
        $school_applicant->elem_start = 'school start elementary';
        $school_applicant->elem_end = 'school end elementary';

        //sec
        $school_applicant->sec_school = 'school name secondary';
        $school_applicant->sec_address = 'school address secondary';
        $school_applicant->sec_start = 'school start secondary';
        $school_applicant->sec_end = 'school end secondary';
        //ter
               
        $school_applicant->ter_school = 'n/a';
        $school_applicant->ter_degree = 'n/a';
        $school_applicant->ter_field_of_study = 'n/a';
        $school_applicant->ter_major = 'n/a';
        $school_applicant->ter_start_year = 'n/a';
        $school_applicant->ter_end_year = 'n/a';

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

        $school_employer = new School();
        $school_employer->user_id = 2;
        //elem
        $school_employer->elem_school = 'school name elementary';
        $school_employer->elem_address = 'school address elementary';
        $school_employer->elem_start = 'school start elementary';
        $school_employer->elem_end = 'school end elementary';

        //sec
        $school_employer->sec_school = 'school name secondary';
        $school_employer->sec_address = 'school address secondary';
        $school_employer->sec_start = 'school start secondary';
        $school_employer->sec_end = 'school end secondary';
        //ter
               
        $school_employer->ter_school = 'n/a';
        $school_employer->ter_degree = 'n/a';
        $school_employer->ter_field_of_study = 'n/a';
        $school_employer->ter_major = 'n/a';
        $school_employer->ter_start_year = 'n/a';
        $school_employer->ter_end_year = 'n/a';
        $school_employer->save();




    }
}
