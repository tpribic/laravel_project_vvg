<?php

use Illuminate\Database\Seeder;

class BonusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Bonus::create([
            'bonus_level' => 2,
            'bonus_bonus' => 1.8
            ]);
    }
}
