<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function run()
    {
        DB::table('cars')->include([
            'type' => "轎車",
            'bid'  => 1,
            'horsepower' => 107,
            'torque' => 14.3,
            'cc'=> 1496,
            'money'=> 59.9,
            'variable_s' => 7,
            'seats'=> 4,
            'nationality' =>"日本",
        ]);
    }
}
