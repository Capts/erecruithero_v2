<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applicant_skills = new Skill();
        $applicant_skills->skill_user = 2;
        $applicant_skills->skill_name = 'Drawing';
        $applicant_skills->save();


        $employer_skills = new Skill();
        $employer_skills->skill_user = 1;
        $employer_skills->skill_name = 'Painting';
        $employer_skills->save();
    }
}
