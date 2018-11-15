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
        $users=array(array(
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role'=>'Admin',)
        ,array([
        'name' => 'Secretary',
        'email' => 'secretary@gmail.com',
        'password' => bcrypt('password'),
        'role'=>'Secretary',
    ]),array([
        'name' => 'President',
        'email' => 'president@gmail.com',
        'password' => bcrypt('password'),
        'role'=>'President',
    ]),array([
        'name' => 'VicePresident',
        'email' => 'vicepresident@gmail.com',
        'password' => bcrypt('password'),
        'role'=>'VicePresident',
    ]),array([
        'name' => 'Treasure',
        'email' => 'treasure@gmail.com',
        'password' => bcrypt('password'),
        'role'=>'Treasure',
    ]));
        foreach ($users as $user)
            DB::table('users')->insert($user);
    }
}
