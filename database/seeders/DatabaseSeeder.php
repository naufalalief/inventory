<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PenggunaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VendorsSeeder::class);
    }
}
