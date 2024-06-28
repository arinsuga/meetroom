<?php

use Illuminate\Database\Seeder;

class RolesMeetRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin
        DB::table('roles')->insert([
            'id' => 101,
            'app_id' => 2,
            'code' => 'mroom-admin',
            'name' => 'Meetroom Admin',
            'description' => 'Role Meeting Room Admin',
        ]);

        //Meetroom Admin
        DB::table('roles')->insert([
            'id' => 102,
            'app_id' => 2,
            'code' => 'mroom-requester',
            'name' => 'Meetroom Requester',
            'description' => 'Role Meeting Room Requester',
        ]);
        
    }
}
