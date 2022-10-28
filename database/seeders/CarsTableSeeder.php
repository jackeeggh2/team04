<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
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
    public function run(){
      DB::table('cars')->insert([
        'id'=>1,
        'type'=>'轎車',
        'bid'=>1,
        'horsepower'=>107,
        'cc'=>1496,
        'money'=>59.9,
        'variable_s'=>7,
        'seats'=>4,
        'nationality'=>'JAPAN',
      ]);
   }
}
