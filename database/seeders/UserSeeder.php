<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user = User::create([
            'name' => 'Naufal Alief',
            'email' => 'naufalalief087@gmail.com',
            'password' => bcrypt('12345678'),
        ]);


        $user->assignRole('user');
        $user->givePermissionTo(['create', 'read']);
        $admin->assignRole('admin');
        $admin->givePermissionTo(['create', 'read', 'update', 'delete']);
    }
}
