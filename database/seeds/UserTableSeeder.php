<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'     => 'Eduardo Henrique',
        	'email'    => 'eduardo18delta@gmail.com',
        	'password' => bcrypt('123456'),
        ]);
    }
}
