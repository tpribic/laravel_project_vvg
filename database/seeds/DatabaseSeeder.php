<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {
        // $this-> call(UsersTableSeeder::class);
        $this-> call(JobtypesTableSeeder::class);
        $this-> call(BonusesTableSeeder::class);
        $this-> call(OfficesTableSeeder::class);
        $this-> call(JobsTableSeeder::class);
        $this-> call(EmployeesTableSeeder::class);

    }
}