<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'id'=>1,
            'brand'=>'TOYOTA',
            'nationality'=>'JAPAN',
            'time'=> rand(1900, 2022) . "-" . rand(1, 12) . "-" . rand(1, 28),
            'places'=>'愛知縣',
            'ceo'=>'豐田佐吉',
          ]);
    }
}
