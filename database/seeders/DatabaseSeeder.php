<?php

namespace Database\Seeders;

use App\Models\Passport\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1, [
            'name' => 'Joe Example',
            'username' => 'jexample',
            'email' => 'jexample@example.com',
            'password' => Hash::make('secret')
        ])->create();
    }
}
