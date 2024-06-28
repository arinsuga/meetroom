<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'System Admin',
            'email' => 'sysadmin@arinsuga.com',
            'email_verified_at' => now(),
            'password' => Hash::make('manager'),
            'remember_token' => Str::random(10),
            'fullcontrol' => true,
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Admin 1',
            'email' => 'admin1@arinsuga.com',
            'email_verified_at' => now(),
            'password' => Hash::make('manager'),
            'remember_token' => Str::random(10),
            'fullcontrol' => false,
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Admin 2',
            'email' => 'admin2@arinsuga.com',
            'email_verified_at' => now(),
            'password' => Hash::make('manager'),
            'remember_token' => Str::random(10),
            'fullcontrol' => false,
            'bo' => true,
        ]);


        //dummy data
        //factory(App\User::class, 1000)->create();

    }
}
