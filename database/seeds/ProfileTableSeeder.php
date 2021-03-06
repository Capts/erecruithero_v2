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





        $p3 = new Profile();

        $p3->user_id = 3;
        $p3->age = 20;
        $p3->bio = 'Hello there!, I am an applicant';
        $p3->bday = '12/20/1985';
        $p3->civil_status = 'single';
        $p3->telephone = "07899292";
        $p3->mobile = "051210221";
        $p3->save();

        $p3Add = new Address();
        $p3Add->user_id = 3;
        $p3Add->street = '#23';
        $p3Add->barangay = 'Kias';
        $p3Add->city = 'Baguio City';
        $p3Add->province = 'Benguet';
        $p3Add->country = 'Philippines';
        $p3Add->save();

        $sp3 = new SchoolPrimary();
        $sp3->user_id = 3;

        //elem
        $sp3->pri_school = 'Primary School';
        $sp3->pri_address = 'Address';
        $sp3->pri_start = 'started';
        $sp3->pri_end = 'graduated';
        $sp3->save();
        
        //sec
        $ss3 = new SchoolSecondary();
        $ss3->user_id = 3;
        
        $ss3->sec_school = 'Secondary School';
        $ss3->sec_address = 'Secondary address';
        $ss3->sec_start = 'started';
        $ss3->sec_end = 'graduated';
        $ss3->save();

        $st3 = new SchoolTertiary();
        $st3->user_id = 3;
        //ter
               
        $st3->ter_school = 'University of the cordilleras';
        $st3->ter_address = 'Gov.Pack Road, Baguio City';
        $st3->ter_degree = 'Bachelor of Science';
        $st3->ter_field_of_study = 'Information Technology';
        $st3->ter_major = 'EERP';
        $st3->ter_start_year = '2014';
        $st3->ter_end_year = '2017';
        $st3->save();




        $p4 = new Profile();

        $p4->user_id = 4;
        $p4->age = 21;
        $p4->bio = 'Hello there!, I am an applicant';
        $p4->bday = '12/20/1985';
        $p4->civil_status = 'single';
        $p4->telephone = "07821512";
        $p4->mobile = "21321512115";
        $p4->save();

        $p4Add = new Address();
        $p4Add->user_id = 4;
        $p4Add->street = '#23';
        $p4Add->barangay = 'Kias';
        $p4Add->city = 'Baguio City';
        $p4Add->province = 'Benguet';
        $p4Add->country = 'Philippines';
        $p4Add->save();

        $sp4 = new SchoolPrimary();
        $sp4->user_id = 4;

        //elem
        $sp4->pri_school = 'Primary School';
        $sp4->pri_address = 'Address';
        $sp4->pri_start = 'started';
        $sp4->pri_end = 'graduated';
        $sp4->save();
        
        //sec
        $ss4 = new SchoolSecondary();
        $ss4->user_id = 4;
        
        $ss4->sec_school = 'Secondary School';
        $ss4->sec_address = 'Secondary address';
        $ss4->sec_start = 'started';
        $ss4->sec_end = 'graduated';
        $ss4->save();

        $st4 = new SchoolTertiary();
        $st4->user_id = 4;
        //ter
               
        $st4->ter_school = 'University of the cordilleras';
        $st4->ter_address = 'Gov.Pack Road, Baguio City';
        $st4->ter_degree = 'Bachelor of Science';
        $st4->ter_field_of_study = 'Information Technology';
        $st4->ter_major = 'EERP';
        $st4->ter_start_year = '2014';
        $st4->ter_end_year = '2017';
        $st4->save();



        $taylor = new Profile();

        $taylor->user_id = 5;
        $taylor->age = 20;
        $taylor->bio = 'Hello there!, I am an Applicant';
        $taylor->bday = '11/09/200';
        $taylor->civil_status = 'single';
        $taylor->telephone = "074661123";
        $taylor->mobile =  "09999999999";
        $taylor->save();

        $taylor_add = new Address();
        $taylor_add->user_id = 5;
        $taylor_add->street = '#23';
        $taylor_add->barangay = 'Kias';
        $taylor_add->city = 'Baguio City';
        $taylor_add->province = 'Benguet';
        $taylor_add->country = 'Philippines';
        $taylor_add->save();

        $taylor_pri = new SchoolPrimary();
        $taylor_pri->user_id = 5;

        //elem
        $taylor_pri->pri_school = 'Primary School';
        $taylor_pri->pri_address = 'Address';
        $taylor_pri->pri_start = 'started';
        $taylor_pri->pri_end = 'graduated';
        $taylor_pri->save();
        
        //sec
        $taylor_sec = new SchoolSecondary();
        $taylor_sec->user_id = 5;
        
        $taylor_sec->sec_school = 'Secondary School';
        $taylor_sec->sec_address = 'Secondary address';
        $taylor_sec->sec_start = 'started';
        $taylor_sec->sec_end = 'graduated';
        $taylor_sec->save();

        $taylor_ter = new SchoolTertiary();
        $taylor_ter->user_id = 5;
        //ter
               
        $taylor_ter->ter_school = 'University of the Cordilleras';
        $taylor_ter->ter_address = 'Gov.Pack Road, Baguio City';
        $taylor_ter->ter_degree = 'Bachelor of Science';
        $taylor_ter->ter_field_of_study = 'Information Technology';
        $taylor_ter->ter_major = 'Networking';
        $taylor_ter->ter_start_year = '2015';
        $taylor_ter->ter_end_year = '2018';
        $taylor_ter->save();



        $tony = new Profile();

        $tony->user_id = 6;
        $tony->age = 20;
        $tony->bio = 'Hello there!, I am an Applicant';
        $tony->bday = '11/09/200';
        $tony->civil_status = 'single';
        $tony->telephone = "074661123";
        $tony->mobile =  "09999999999";
        $tony->save();

        $tonyr_add = new Address();
        $tonyr_add->user_id = 6;
        $tonyr_add->street = '#23';
        $tonyr_add->barangay = 'Kias';
        $tonyr_add->city = 'Baguio City';
        $tonyr_add->province = 'Benguet';
        $tonyr_add->country = 'Philippines';
        $tonyr_add->save();

        $tony_pri = new SchoolPrimary();
        $tony_pri->user_id = 6;

        //elem
        $tony_pri->pri_school = 'Primary School';
        $tony_pri->pri_address = 'Address';
        $tony_pri->pri_start = 'started';
        $tony_pri->pri_end = 'graduated';
        $tony_pri->save();
        
        //sec
        $tony_sec = new SchoolSecondary();
        $tony_sec->user_id = 6;
        
        $tony_sec->sec_school = 'Secondary School';
        $tony_sec->sec_address = 'Secondary address';
        $tony_sec->sec_start = 'started';
        $tony_sec->sec_end = 'graduated';
        $tony_sec->save();

        $tony_ter = new SchoolTertiary();
        $tony_ter->user_id = 6;
        //ter
               
        $tony_ter->ter_school = 'University of the Cordilleras';
        $tony_ter->ter_address = 'Gov.Pack Road, Baguio City';
        $tony_ter->ter_degree = 'Bachelor of Science';
        $tony_ter->ter_field_of_study = 'Information Technology';
        $tony_ter->ter_major = 'Networking';
        $tony_ter->ter_start_year = '2015';
        $tony_ter->ter_end_year = '2018';
        $tony_ter->save();
    }

}
