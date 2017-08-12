<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\Address;
use App\SchoolPrimary;
use App\SchoolSecondary;
use App\SchoolTertiary;

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
        $profile_applicant->age = 20;
        $profile_applicant->bio = 'Hello there!, I am an employer';
        $profile_applicant->bday = '11/09/200';
        $profile_applicant->civil_status = 'single';
        $profile_applicant->telephone = "074661123";
        $profile_applicant->mobile =  "09999999999";
        $profile_applicant->save();

        $address_applicant = new Address();
        $address_applicant->user_id = 1;
        $address_applicant->street = '#23';
        $address_applicant->barangay = 'Kias';
        $address_applicant->city = 'Baguio City';
        $address_applicant->province = 'Benguet';
        $address_applicant->country = 'Philippines';
        $address_applicant->save();

        $school_applicant_primary = new SchoolPrimary();
        $school_applicant_primary->user_id = 1;

        //elem
        $school_applicant_primary->pri_school = 'Primary School';
        $school_applicant_primary->pri_address = 'Address';
        $school_applicant_primary->pri_start = 'started';
        $school_applicant_primary->pri_end = 'graduated';
        $school_applicant_primary->save();
        
        //sec
        $school_applicant_secondary = new SchoolSecondary();
        $school_applicant_secondary->user_id = 1;
        
        $school_applicant_secondary->sec_school = 'Secondary School';
        $school_applicant_secondary->sec_address = 'Secondary address';
        $school_applicant_secondary->sec_start = 'started';
        $school_applicant_secondary->sec_end = 'graduated';
        $school_applicant_secondary->save();

        $school_applicant_tertiary = new SchoolTertiary();
        $school_applicant_tertiary->user_id = 1;
        //ter
               
        $school_applicant_tertiary->ter_school = 'University of the Cordilleras';
        $school_applicant_tertiary->ter_address = 'Gov.Pack Road, Baguio City';
        $school_applicant_tertiary->ter_degree = 'Bachelor of Science';
        $school_applicant_tertiary->ter_field_of_study = 'Information Technology';
        $school_applicant_tertiary->ter_major = 'Networking';
        $school_applicant_tertiary->ter_start_year = '2015';
        $school_applicant_tertiary->ter_end_year = '2018';
        $school_applicant_tertiary->save();
        
        


        $profile_employer = new Profile();

        $profile_employer->user_id = 2;
        $profile_employer->age = 20;
        $profile_employer->bio = 'Hello there!, I am an applicant';
        $profile_employer->bday = '12/20/1996';
        $profile_employer->civil_status = 'single';
        $profile_employer->telephone = "07899292";
        $profile_employer->mobile = "09888888888";
        $profile_employer->save();

        $address_employer = new Address();
        $address_employer->user_id = 2;
        $address_employer->street = '#23';
        $address_employer->barangay = 'Kias';
        $address_employer->city = 'Baguio City';
        $address_employer->province = 'Benguet';
        $address_employer->country = 'Philippines';
        $address_employer->save();

        $school_employer_primary = new SchoolPrimary();
        $school_employer_primary->user_id = 2;

        //elem
        $school_employer_primary->pri_school = 'Primary School';
        $school_employer_primary->pri_address = 'Address';
        $school_employer_primary->pri_start = 'started';
        $school_employer_primary->pri_end = 'graduated';
        $school_employer_primary->save();
        
        //sec
        $school_employer_secondary = new SchoolSecondary();
        $school_employer_secondary->user_id = 2;
        
        $school_employer_secondary->sec_school = 'Secondary School';
        $school_employer_secondary->sec_address = 'Secondary address';
        $school_employer_secondary->sec_start = 'started';
        $school_employer_secondary->sec_end = 'graduated';
        $school_employer_secondary->save();

        $school_employer_tertiary = new SchoolTertiary();
        $school_employer_tertiary->user_id = 2;
        //ter
               
        $school_employer_tertiary->ter_school = 'University of the cordilleras';
        $school_employer_tertiary->ter_address = 'Gov.Pack Road, Baguio City';
        $school_employer_tertiary->ter_degree = 'Bachelor of Science';
        $school_employer_tertiary->ter_field_of_study = 'Information Technology';
        $school_employer_tertiary->ter_major = 'EERP';
        $school_employer_tertiary->ter_start_year = '2014';
        $school_employer_tertiary->ter_end_year = '2017';
        $school_employer_tertiary->save();
    }

}
