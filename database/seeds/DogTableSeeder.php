<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            'user_id' => 1,
            'name' => 'Canelo',
            'gender' => '0', 
            'race' => 'bichon maltes',
          	'age' => '11'
        ]);
        DB::table('dogs')->insert([
            'user_id' => 2,
            'name' => 'Thor',
            'gender' => '0', 
            'race' => 'pastor aleman',
              'age' => '11'
        ]);
        DB::table('dogs')->insert([
            'user_id' => 3,
            'name' => 'Luna',
            'gender' => '0', 
            'race' => 'bulldog',
              'age' => '3'
        ]);
        DB::table('dogs')->insert([
            'user_id' => 4,
            'name' => 'Lola',
            'gender' => '1', 
            'race' => 'sabueso',
              'age' => '6'
        ]);
        DB::table('dogs')->insert([
            'user_id' => 5,
            'name' => 'Estrella',
            'gender' => '1', 
            'race' => 'labrador',
              'age' => '4'
        ]);
        DB::table('dogs')->insert([
            'user_id' => 6,
            'name' => 'Sasha',
            'gender' => '1', 
            'race' => 'akita',
              'age' => '10'
        ]);
    }
}
