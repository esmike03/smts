<?php

namespace Database\Seeders;

use App\Models\Disability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disabilities = [
            'Mental/Intellectual',
            'Visual Disability',
            'Orthopedic(Musculoskeletal) Disability',
            'Hearing Disability',
            'Speech Impairment',
            'Multiple Disabilities, specify',
            'Psychosocial Disability',
            'Disability Due to Chronic Illness',
            'Learning Disability',
        ];

        foreach($disabilities as $disability) {
            Disability::updateOrCreate([
                'title' => $disability,
            ]);
        }
    }
}
