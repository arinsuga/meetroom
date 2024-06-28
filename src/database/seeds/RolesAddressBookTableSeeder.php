<?php

use Illuminate\Database\Seeder;

class RolesAddressBookTableSeeder extends Seeder
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
            'id' => 201,
            'app_id' => 2,
            'code' => 'adbook-admin',
            'name' => 'Address Book Admin',
            'description' => 'Role Address Book Admin',
        ]);

        //Meetroom Admin
        DB::table('roles')->insert([
            'id' => 202,
            'app_id' => 2,
            'code' => 'adbook-viewer',
            'name' => 'Address Book Viewer',
            'description' => 'Role Address Book Viewer',
        ]);
        
    }
}
