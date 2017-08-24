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
        for ($i=1; $i <= 100; $i++) { 
        	DB::table('jobs')->insert([
                'user_id' => 1,
	        	'job_title' => $faker->word,
	        	'responsibilities' => implode($faker->paragraphs(5)),
	        	'qualifications' => implode($faker->paragraphs(5)),
	        	'company' => $faker->company,
                'work_location' => $faker->address,
	        	'salary' => $faker->numberBetween($min = 1000, $max = 9000),
                'due_date' => $faker->iso8601( $max = 'now' ),
	        	'status' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
	        	]);
        }
    }
}
