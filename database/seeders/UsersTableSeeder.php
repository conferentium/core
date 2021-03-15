<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ramesh',
            'email' => 'ramesh@organisercollege.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
        ]);
        User::factory()->count(5)->create();
    }
}
