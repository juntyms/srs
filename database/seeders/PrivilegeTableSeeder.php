<?php

namespace Database\Seeders;

use App\Models\Privilege;
use Illuminate\Database\Seeder;

class PrivilegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('privileges')->delete();
        Privilege::create(['name'=>'Administrator']);
        Privilege::create(['name'=>'Department Coordinator']);
        Privilege::create(['name'=>'Technician']);
        
    }
}
