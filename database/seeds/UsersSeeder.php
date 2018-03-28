<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alejandra Ferrerl',
            'email' => 'aleFerrel@gmail.com',
            'password' => bcrypt('admin120324'),
        ]);

        User::create([
            'name' => 'DanyMtz',
            'email' => 'headcruser@gmail.com',
            'password' => bcrypt('admin120324'),
        ]);

        User::create([
            'name' => 'Alejandra Mancera',
            'email' => 'aleMancera@gmail.com',
            'password' => bcrypt('admin120324'),
        ]);
    }
}
