<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendors;

class VendorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Vendors::create([
            'name' => 'percobaan',
            'user_id' => '2'
        ]);

    }
}
