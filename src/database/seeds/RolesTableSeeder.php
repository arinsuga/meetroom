<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Reset table
        DB::table('roles')->delete();
     
        //System Admin Roles ID 1-99
        DB::table('roles')->insert([
            'id' => 1,
            'app_id' => 0,
            'code' => 'sys-admin',
            'name' => 'System Admin',
            'description' => 'Role System Admin',
        ]);

        //app->office->meetroom->1
        $this->call('RolesMeetRoomTableSeeder');
        //app->office->addressbook->2
        $this->call('RolesAddressBookTableSeeder');
        
        

    } //end method
} //end class
