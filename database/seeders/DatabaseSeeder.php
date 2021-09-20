<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        $user = new \App\Models\User();
        $user->password = Hash::make('changeme');
        $user->email = 'test@test.com';
        $user->name = 'Test User';
        $user->save();


    }
}
