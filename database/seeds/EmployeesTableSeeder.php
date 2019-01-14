<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Employee::create([
            'employee_name' => 'Tomislav',
            'employee_surename' => 'Pribić',
            'employee_oib' => '85467985123',
            'employee_email' => 'tomislav.pribic@vvg.hr',
            'job_id' => 1,
            'bonus_id' => 1,
            'office_id' => 1
            ]);
    }
}
