<?php

namespace Database\Seeders;

use App\Models\SoftwareType;
use Illuminate\Database\Seeder;

class SoftwareTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('software_types')->delete();
        SoftwareType::create(['name'=>'Paid']);
        SoftwareType::create(['name'=>'Open Source']);
        SoftwareType::create(['name'=>'Freeware']);        
    }
}
