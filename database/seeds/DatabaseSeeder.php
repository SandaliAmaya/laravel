<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vishwa',
            'email' => 'vrn@gmail.com',
            'password' => 'secret',
            'remember_token'=> 'tokenx',
            'created_at'=> date ('y-m-d H:i:s'),
            'updated_at'=> date ('y-m-d H:i:s')


        ]);

    }
}
