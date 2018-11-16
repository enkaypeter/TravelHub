<?php

use Illuminate\Database\Seeder;

class UssdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ussd')->insert([
            'ACCORD' => 0,
            'AAC' => 0,
            'ACPN' => 0,
            'ADC' => 0,
            'APC' => 0,
            'APGA' => 0,
            'GDPN' => 0,
            'FDP' => 0,
            'PDP' => 0,
            'PPN' => 0,
            'YES PARTY' => 0,
            'YPP' => 0,
        ]);
    }
}
