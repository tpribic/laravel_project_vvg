<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Office::create([
            'office_name' => 'Glavni ured',
            'office_address' => 'Ulica glavnog ureda'
            ]);
    }
}
