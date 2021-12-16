<?php

namespace Database\Seeders;

use App\Models\License;
use Illuminate\Database\Seeder;

class LicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('licenses')->delete();
        License::create(['name'=>'Trial License']);
        License::create(['name'=>'Freeware License']);
        License::create(['name'=>'Perpetual License']);
        License::create(['name'=>'Educational License']);
        License::create(['name'=>'Commercial License']);
        License::create(['name'=>'Enterprise License']);
    }
}
