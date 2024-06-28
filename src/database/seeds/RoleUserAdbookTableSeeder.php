<?php

use Illuminate\Database\Seeder;

class RoleUserAdbookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* admin1@hadiprana.co.id  */
        DB::table('role_user')->insert([
            'app_id' => 2, //app(office)
            'role_id' => 201, //role(adbook-admin)
            'user_id' => 2, //user(admin1@hadiprana.co.id)
        ]);

        /* admin2@hadiprana.co.id  */
        DB::table('role_user')->insert([
            'app_id' => 2, //app(office)
            'role_id' => 201, //role(adbook-admin)
            'user_id' => 3, //user(admin2@hadiprana.co.id)
        ]);
        

    }
}
