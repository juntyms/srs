<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(DepartmentTableSeeder::class);
        $this->call(LicenseTableSeeder::class);
        $this->call(PrivilegeTableSeeder::class);
        $this->call(SoftwareTypeTableSeeder::class);
        //\App\Models\User::factory(10)->create();
    }
}
