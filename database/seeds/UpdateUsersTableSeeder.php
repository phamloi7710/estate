<?php

use Illuminate\Database\Seeder;

class UpdateUsersTableSeeder extends Seeder
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
            'username'  =>'osimivna',
            'email'     =>'osimivietnam@gmail.com',
            'password'  =>bcrypt('osimivietnam'),
            'is_admin'  => 'true'
        ]);
    }
}
