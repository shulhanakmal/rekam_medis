<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
    */

    public function run()
    {

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('123456'),
                'status' => '1',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}