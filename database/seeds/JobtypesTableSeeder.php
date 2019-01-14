<?php

use Illuminate\Database\Seeder;

class JobtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Jobtype::create([
            'jobtype_name' => 'Programer'
            ]);
    }
}
