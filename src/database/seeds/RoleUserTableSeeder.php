<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('role_user')->delete();
        //app->cms
        //$this->call('RoleUserCmsTableSeeder');

        //app->mroom
        $this->call('RoleUserMeetroomTableSeeder');
        
        //app->adbook
        $this->call('RoleUserAdbookTableSeeder');

                

    } //end method
} //end class
