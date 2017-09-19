<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Appleseed',
            'email' => 'john@mail.com',
            'password' =>'secret',
            'remember_token'=> 'token1',
            'created_at' => date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s')
        ]);
    }
}
