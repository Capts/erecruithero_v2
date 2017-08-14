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
        $employer_skills = new Skill();
        $employer_skills->user_id = 1;
        $employer_skills->skill_name = 'Drawing';
        $employer_skills->save();


        $applicant_skills = new Skill();
        $applicant_skills->user_id = 2;
        $applicant_skills->skill_name = 'Programming';
        $applicant_skills->save();

        $app_skills1 = new Skill();
        $app_skills1->user_id = 3;
        $app_skills1->skill_name = 'Programming';
        $app_skills1->save();

        $app_skills2 = new Skill();
        $app_skills2->user_id = 4;
        $app_skills2->skill_name = 'Programming';
        $app_skills2->save();

        $applicant_skills3 = new Skill();
        $applicant_skills3->user_id = 2;
        $applicant_skills3->skill_name = 'Dancing';
        $applicant_skills3->save();

        $app_skills4 = new Skill();
        $app_skills4->user_id = 3;
        $app_skills4->skill_name = 'Dancing';
        $app_skills4->save();

        $app_skills5 = new Skill();
        $app_skills5->user_id = 4;
        $app_skills5->skill_name = 'Dancing';
        $app_skills5->save();

        
    }
}
