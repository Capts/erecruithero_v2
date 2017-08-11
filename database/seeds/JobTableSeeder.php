<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

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
                'user_id' => 1,
	        	'job_title' => $faker->sentence,
	        	'responsibilities' => implode($faker->paragraphs(6)),
	        	'qualifications' => implode($faker->paragraphs(6)),
	        	'company' => $faker->sentence,
                'work_location' => $faker->address,
	        	'salary' => $faker->numberBetween($min = 1000, $max = 9000),
	        	'due_date' => $faker->iso8601( $max = 'now' ),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
	        	]);
        }
    }
}
