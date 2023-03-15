<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahlul Aziz',
            'email' => 'ahlulazizap@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'remember_token' => Str::random(10),
        ]);
        User::factory()->count(9)->unverified()->create();
    }
}
