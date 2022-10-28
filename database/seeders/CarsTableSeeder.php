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
    public function generateRandomtype() {
      $type = ['轎車', '轎式休旅車', '休旅車', '緊湊型轎車', '小型轎車', '中型房車','大型休旅車','中型休旅車','運動休旅車','超級跑車','跑車','雙門跑車'];
      return $type[rand(0, count($type)-1)];      
  }
  public function generateRandomnationality() {
    $ationality = ['美國', '日本', '德國', '英國', '法國', '義大利', '台灣'];
    return $ationality[rand(0, count($ationality)-1)];
}
    public function run(){
      DB::table('cars')->insert([
        'id'=>rand(1, 20),
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
