<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ictdu',
            'email' => 'admin@spcfpartners.com',
            'password' => bcrypt('admin1234'),
        ]);
    }
}
