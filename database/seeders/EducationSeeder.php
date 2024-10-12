<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::firstOrCreate([
            'title' => 'No Grade Completed',
        ]);

        Education::firstOrCreate([
            'title' => 'Pre-School (Nursery/Kinder/Prep)',
        ]);

        Education::firstOrCreate([
            'title' => 'Elementary Undergraduate',
        ]);

        Education::firstOrCreate([
            'title' => 'High School Undergraduate',
        ]);
        
        Education::firstOrCreate([
            'title' => 'High School Graduate',
        ]);

        Education::firstOrCreate([
            'title' => 'Post Secondary',
        ]);


        Education::firstOrCreate([
            'title' => 'College Undergraduate',
        ]);

        Education::firstOrCreate([
            'title' => 'College Graduate or Higher',
        ]);
    }
}
