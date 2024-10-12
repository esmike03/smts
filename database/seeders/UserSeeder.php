<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\UserType;
use App\Utils\AgentHelper;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // mao ni admin
        User::firstOrCreate([
            'first_name' => 'Developer',
            'last_name' => 'Account',
            'email' => 'developer@account.test',
            'password' => bcrypt('password'),
            'type' => UserType::Admin,
        ]);
        
    }
}
