<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'email_verified_at' => '2019-02-04 07:11:52',
          	'role' => 'user'
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Paulo',
            'email' => 'Paulo@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'email_verified_at' => '2019-02-04 07:11:52',
              'role' => 'user'
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'name' => 'Eneko',
            'email' => 'Eneko@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'email_verified_at' => '2019-02-04 07:11:52',
              'role' => 'user'
        ]);
        DB::table('users')->insert([
            'id' => '4',
            'name' => 'Juan',
            'email' => 'Juan@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'email_verified_at' => '2019-02-04 07:11:52',
              'role' => 'user'
        ]);
        DB::table('users')->insert([
            'id' => '5',
            'name' => 'Robert',
            'email' => 'Robert@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'email_verified_at' => '2019-02-04 07:11:52',
              'role' => 'user'
        ]);
        DB::table('users')->insert([
            'id' => '6',
            'name' => 'Aritz',
            'email' => 'Aritz@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'email_verified_at' => '2019-02-04 07:11:52',
              'role' => 'user'
        ]);
    }
}
