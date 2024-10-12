<?php

namespace Database\Seeders;

use App\Models\Cause;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CauseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cause::firstOrCreate([
            'title' => 'Congenital/Inborn',
        ]);

        Cause::firstOrCreate([
            'title' => 'Illness',
        ]);

        Cause::firstOrCreate([
            'title' => 'Injury',
        ]);
    }
}
