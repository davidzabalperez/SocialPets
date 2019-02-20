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
            'user_id' => 2,
            'name' => 'Canelo',
            'gender' => '0', 
            'race' => 'bichon maltes',
          	'age' => '11'
        ]);
    }
}
