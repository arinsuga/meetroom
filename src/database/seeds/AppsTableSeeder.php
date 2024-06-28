<?php

use Illuminate\Database\Seeder;

class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('apps')->delete();

        //Office Application
        DB::table('apps')->insert([
            'id' => 1,
            'code' => 'cms',
            'name' => 'Website Backend',
            'description' => 'Website Backend',
        ]);

        //Office Application
        DB::table('apps')->insert([
            'id' => 2,
            'code' => 'off',
            'name' => 'Office',
            'description' => 'Office Application',
        ]);

    } //end method
} //end classs
