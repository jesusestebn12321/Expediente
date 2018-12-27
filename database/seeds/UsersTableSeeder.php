<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'name'=>'Jesus',
            'lastname'=>'Villalta',
            'dni'=>25237118,
            'email'=>'admin@gmail.com',
            'rol'=> 1,
            'pais'=> 1,
            'password' => bcrypt('123456')
        ]);
    }
}
