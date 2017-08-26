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
        // $employer_skills = new Skill();
        // $employer_skills->user_id = 1;
        // $employer_skills->skill_name = 'Drawing';
        // $employer_skills->save();


        $applicant_skills = new Skill();
        $applicant_skills->user_id = 2;
        $applicant_skills->skill_name = 'Programming';
        $applicant_skills->save();

        $applicant_skills2 = new Skill();
        $applicant_skills2->user_id = 2;
        $applicant_skills2->skill_name = 'Python';
        $applicant_skills2->save();

        $applicant_skills3 = new Skill();
        $applicant_skills3->user_id = 2;
        $applicant_skills3->skill_name = 'Advertising';
        $applicant_skills3->save();

        $applicant_skills4 = new Skill();
        $applicant_skills4->user_id = 2;
        $applicant_skills4->skill_name = 'Java';
        $applicant_skills4->save();

        $applicant_skills5 = new Skill();
        $applicant_skills5->user_id = 2;
        $applicant_skills5->skill_name = 'Designing';
        $applicant_skills5->save();

        $applicant_skills6 = new Skill();
        $applicant_skills6->user_id = 2;
        $applicant_skills6->skill_name = 'Abap';
        $applicant_skills6->save();

        $app_skills1 = new Skill();
        $app_skills1->user_id = 3;
        $app_skills1->skill_name = 'Programmer';
        $app_skills1->save();

        $app_skills2 = new Skill();
        $app_skills2->user_id = 3;
        $app_skills2->skill_name = 'Python';
        $app_skills2->save();

        $app_skills3 = new Skill();
        $app_skills3->user_id = 3;
        $app_skills3->skill_name = 'Advertise';
        $app_skills3->save();

        $app_skills14 = new Skill();
        $app_skills14->user_id = 3;
        $app_skills14->skill_name = 'Java';
        $app_skills14->save();

        $app_skills15 = new Skill();
        $app_skills15->user_id = 3;
        $app_skills15->skill_name = 'Designing';
        $app_skills15->save();

        $app_skills6 = new Skill();
        $app_skills6->user_id = 3;
        $app_skills6->skill_name = 'Abap';
        $app_skills6->save();

        $app_skills2 = new Skill();
        $app_skills2->user_id = 4;
        $app_skills2->skill_name = 'Programmer';
        $app_skills2->save();

        $app_skills3 = new Skill();
        $app_skills3->user_id = 4;
        $app_skills3->skill_name = 'Python';
        $app_skills3->save();

        $app_skills4 = new Skill();
        $app_skills4->user_id = 4;
        $app_skills4->skill_name = 'Advertise';
        $app_skills4->save();

        $app_skills5 = new Skill();
        $app_skills5->user_id = 4;
        $app_skills5->skill_name = 'Java';
        $app_skills5->save();

        $app_skills6 = new Skill();
        $app_skills6->user_id = 4;
        $app_skills6->skill_name = 'Design';
        $app_skills6->save();

        $app_skills7 = new Skill();
        $app_skills7->user_id = 4;
        $app_skills7->skill_name = 'Abap';
        $app_skills7->save();




        $applicant_skills3 = new Skill();
        $applicant_skills3->user_id = 2;
        $applicant_skills3->skill_name = 'Danv=cer';
        $applicant_skills3->save();

        $app_skills4 = new Skill();
        $app_skills4->user_id = 3;
        $app_skills4->skill_name = 'Dancing';
        $app_skills4->save();

        $app_skills5 = new Skill();
        $app_skills5->user_id = 4;
        $app_skills5->skill_name = 'dancer';
        $app_skills5->save();

        

        $taylorSkill1 = new Skill();
        $taylorSkill1->user_id = 5;
        $taylorSkill1->skill_name = 'Professional singer';
        $taylorSkill1->save();

        $taylorSkill2 = new Skill();
        $taylorSkill2->user_id = 5;
        $taylorSkill2->skill_name = 'Singer';
        $taylorSkill2->save();

        $taylorSkill3 = new Skill();
        $taylorSkill3->user_id = 5;
        $taylorSkill3->skill_name = 'Song writer';
        $taylorSkill3->save();

        $taylorSkill4 = new Skill();
        $taylorSkill4->user_id = 5;
        $taylorSkill4->skill_name = 'Professional dancer';
        $taylorSkill4->save();

        $taylorSkill5 = new Skill();
        $taylorSkill5->user_id = 5;
        $taylorSkill5->skill_name = 'Sales and marketing';
        $taylorSkill5->save();



        $tonySkill1 = new Skill();
        $tonySkill1->user_id = 6;
        $tonySkill1->skill_name = 'Licensed dentist';
        $tonySkill1->save();

        $tonySkill2 = new Skill();
        $tonySkill2->user_id = 6;
        $tonySkill2->skill_name = 'registered nurse';
        $tonySkill2->save();

        $tonySkill3 = new Skill();
        $tonySkill3->user_id = 6;
        $tonySkill3->skill_name = 'Singer';
        $tonySkill3->save();

        $tonySkill4 = new Skill();
        $tonySkill4->user_id = 6;
        $tonySkill4->skill_name = 'English teacher';
        $tonySkill4->save();

        $tonySkill5 = new Skill();
        $tonySkill5->user_id = 6;
        $tonySkill5->skill_name = 'teacher';
        $tonySkill5->save();
    }
}
