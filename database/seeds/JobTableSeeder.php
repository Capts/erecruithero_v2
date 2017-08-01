<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Job');

        for ($i=1; $i <= 20; $i++) { 
        	DB::table('jobs')->insert([
	        	'job_title' => $faker->sentence,
	        	'responsibilities' => implode($faker->paragraphs(6)),
	        	'qualifications' => implode($faker->paragraphs(6)),
	        	'company' => $faker->sentence,
	        	'work_location' => $faker->address,
	        	'applicant_needed' => $faker->randomDigit,
	        	]);
        }
    }
}
