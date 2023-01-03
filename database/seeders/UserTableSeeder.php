<?php

namespace Database\Seeders;

use App\Models\User;
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
        \DB::table('users')->delete();
        User::create([
            'username'=>'z.alawaid',
            'email'=>'z.alawaid@sct.edu.om',
            'password'=>'',
            'fullname'=>'Zainab Al-Awaid',
            'department_id'=>'2',
        ]);      
    }
}
