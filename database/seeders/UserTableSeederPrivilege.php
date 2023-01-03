<?php

namespace Database\Seeders;

use App\Models\userprivilege;
use Illuminate\Database\Seeder;

class UserTableSeederPrivilege extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('user_privileges')->delete();
        userprivilege::create([
            'privilege_id'=>'1',
            'user_id'=>'1',
        ]);      
    }
}
