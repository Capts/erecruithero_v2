<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employer = Role::where('name', 'employer')->first();
        $role_applicant  = Role::where('name', 'applicant')->first();


        $employer = new User();
        
        $employer->firstname = 'Ana';
        $employer->lastname = 'Employer';
        $employer->email = 'employer@gmail.com';
        $employer->password = bcrypt('secret');
        $employer->avatar = 'public/default/avatars/female.png';
        $employer->slug = str_slug('ana-employer');
        $employer->gender = "female";
        $employer->save();
        $employer->roles()->attach($role_employer);
        
        $applicant = new User();
        $applicant->firstname = 'Charina';
        $applicant->lastname = 'Applicant';
        $applicant->email = 'applicant@gmail.com';
        $applicant->password = bcrypt('secret');
        $applicant->avatar = 'public/default/avatars/female.png';
        $applicant->slug = str_slug('charina-applicant');
        $applicant->gender = "female";
        $applicant->save();
        $applicant->roles()->attach($role_applicant);


    }


}
