<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Josu',
            'email' => 'josu@admin.com',
            'password' => '12345678',
          	'role' => 'admin'
        ]);
    }
}
