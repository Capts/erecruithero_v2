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

        $applicant1 = new User();
        $applicant1->firstname = 'Raymund';
        $applicant1->lastname = 'Dilan';
        $applicant1->email = 'raymund@gmail.com';
        $applicant1->password = bcrypt('secret');
        $applicant1->avatar = 'public/default/avatars/male.png';
        $applicant1->slug = str_slug('raymund-dilan');
        $applicant1->gender = "male";
        $applicant1->save();
        $applicant1->roles()->attach($role_applicant);

        $applicant2 = new User();
        $applicant2->firstname = 'Jeff';
        $applicant2->lastname = 'Ingosan';
        $applicant2->email = 'jeff@gmail.com';
        $applicant2->password = bcrypt('secret');
        $applicant2->avatar = 'public/default/avatars/male.png';
        $applicant2->slug = str_slug('jeff-ingosan');
        $applicant2->gender = "male";
        $applicant2->save();
        $applicant2->roles()->attach($role_applicant);


    }


}
