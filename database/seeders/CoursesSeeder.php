<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courses::firstOrCreate([
            'title' => 'Massage Therapy NC II',
            'description' => 'This is the other introductory course that covers the basic knowledge of Massage Therapy. 
                                It tackles the three stages of massage therapy - the pre-massage, massage proper, and post-massage.',
            'slots' => 15,
            'remaining' => 15,
            'batch' => 1,
            'start_date' => '2024-01-01', // Use YYYY-MM-DD format for dates
            'end_date' => '2024-01-03', // Use YYYY-MM-DD format for dates
            'scholar_type'=> 'TWSP',
            'status'=> 'In Progress',
        ]);

        Courses::firstOrCreate([
            'title' => 'FBS NC II',
            'description' => 'The 356-hour program teaches students to prepare and serve food and beverages in establishments like restaurants,
                                hotels, and banquets. It covers topics like taking orders, promoting products, and handling customer concerns.',
            'slots' => 15,
            'remaining' => 15,
            'batch' => 1,
            'start_date' => '2024-01-01', // Use YYYY-MM-DD format for dates
            'end_date' => '2024-01-03', // Use YYYY-MM-DD format for dates
            'scholar_type'=> 'TWSP',
            'status'=> 'In Progress',
        ]);

    }
}
