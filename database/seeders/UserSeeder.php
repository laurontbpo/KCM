<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();

        if(!$user) {
            DB::table('users')->insert([
                'name'=> 'admin',
                'email'=> 'admin@gmail.com',
                'password'=> bcrypt('Password123!'),
            ]);
        }
    }
}
