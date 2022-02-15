<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>  'Admin',
            'email' =>  'admin@admin',
            'password' =>  123
        ])->roles()->attach(1);

        User::create([
            'name' =>  'Jonatan',
            'email' =>  'jonatan@jonatan',
            'password' =>  123
        ])->roles()->attach(2);
    }
}
