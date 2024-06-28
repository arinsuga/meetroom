<?php

use Illuminate\Database\Seeder;

class RoleUserMeetroomTableSeeder extends Seeder
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
            'role_id' => 101, //role(mroom-admin)
            'user_id' => 2, //user(admin1@hadiprana.co.id)
        ]);

        /* admin2@hadiprana.co.id  */
        DB::table('role_user')->insert([
            'app_id' => 2, //app(office)
            'role_id' => 101, //role(mroom-admin)
            'user_id' => 3, //user(admin2@hadiprana.co.id)
        ]);

        /* rianti@hadiprana.co.id  */
        DB::table('role_user')->insert([
            'app_id' => 2, //app(office)
            'role_id' => 101, //role(mroom-admin)
            'user_id' => 11, //user(rianti@hadiprana.co.id)
        ]);

        /* gani@hadiprana.co.id  */
        DB::table('role_user')->insert([
            'app_id' => 2, //app(office)
            'role_id' => 101, //role(mroom-admin)
            'user_id' => 12, //user(gani@hadiprana.co.id)
        ]);

    }
}
