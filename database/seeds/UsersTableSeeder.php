<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Dung';
        $user->age = '26';
        $user->address = 'Ha Noi';
        $user->email = 'dung@gmail.com';
        $user->save();
        $user = new \App\User();
        $user->name = 'Thang';
        $user->age = '30';
        $user->address = 'Ha Dong';
        $user->email = 'thang@gmail.com';
        $user->save();
    }
}
