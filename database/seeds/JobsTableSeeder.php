<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Job::create([
            'job_name' => 'Mobile Developer',
            'job_salary' => 1500,
            'jobtype_id' => 1
            ]);
    }
}
