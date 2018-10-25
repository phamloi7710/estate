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
        DB::table('users')->insert([
            'name'      =>'Quản Trị Viên',
            'username'  =>'admin',
            'email'     =>'admin@admin.com',
            'password'  =>bcrypt('111111'),
            'is_admin'  => 'true'
        ]);
    }
}
