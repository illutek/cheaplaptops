<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * Aanmaken van een admin user
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'firstname'=>'Stefan',
            'lastname'=>'VDB',
            'email'=>'stefanvandenborne@gmail.com',
            'password'=>bcrypt('secret'),
            'telephone'=>'011434333',
            'admin'=>1,
        ]);
    }
}
