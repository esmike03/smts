<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classification::firstOrCreate([
            'title' => 'Students',
        ]);

        Classification::firstOrCreate([
            'title' => 'Industry Workers',
        ]);

        Classification::firstOrCreate([
            'title' => 'Indigenous People & Cultural Communities',
        ]);

        Classification::firstOrCreate([
            'title' => 'Out-of-School-Youth',
        ]);

        Classification::firstOrCreate([
            'title' => 'Cooperatives',
        ]);

        Classification::firstOrCreate([
            'title' => 'Disadvantaged Women',
        ]);

        Classification::firstOrCreate([
            'title' => 'Solo Parent',
        ]);

        Classification::firstOrCreate([
            'title' => 'Family Enterprises',
        ]);

        Classification::firstOrCreate([
            'title' => 'Victim of Natural Disasters and Calamities',
        ]);

        Classification::firstOrCreate([
            'title' => 'Solo Parent’s Children',
        ]);

        Classification::firstOrCreate([
            'title' => 'Family Members of Micro entrepreneur',
        ]);

        Classification::firstOrCreate([
            'title' => 'Victim or Survivor of Human Traffic',
        ]);

        Classification::firstOrCreate([
            'title' => 'Senior Citizens',
        ]);

        Classification::firstOrCreate([
            'title' => 'Micro Entrepreneurs',
        ]);

        Classification::firstOrCreate([
            'title' => 'Drug Dependent Surrenders',
        ]);

        Classification::firstOrCreate([
            'title' => 'TVET Trainers',
        ]);

        Classification::firstOrCreate([
            'title' => 'Farmers and Fisherman',
        ]);

        Classification::firstOrCreate([
            'title' => 'Rebel Returnees or Decommissioned',
        ]);

        Classification::firstOrCreate([
            'title' => 'Displaced HEIs Teaching Personnel',
        ]);

        Classification::firstOrCreate([
            'title' => 'Family Members of Farmers and Fisherman',
        ]);

        Classification::firstOrCreate([
            'title' => 'Inmates and Detainees',
        ]);

        Classification::firstOrCreate([
            'title' => 'Persons with Disabilities',
        ]);

        Classification::firstOrCreate([
            'title' => 'Community Trng. & Employment Coordinator',
        ]);

        Classification::firstOrCreate([
            'title' => 'Family Members of Inmates and Detainees',
        ]);

        Classification::firstOrCreate([
            'title' => 'Currently Employed Workers',
        ]);


        Classification::firstOrCreate([
            'title' => 'Overseas Filipino Workers (OFW) Dependents
                        Name of OFW:  
                        ',
        ]);

        Classification::firstOrCreate([
            'title' => 'Uniformed Personnel',
        ]);

        Classification::firstOrCreate([
            'title' => 'Employees with Contractual/Job Order Status',
        ]);

        Classification::firstOrCreate([
            'title' => 'Wounded-in-Action AFP & PNP Personnel',
        ]);

        Classification::firstOrCreate([
            'title' => 'Urban and Rural Poor',
        ]);

        Classification::firstOrCreate([
            'title' => 'Returning/Repatriated Overseas Filipino Workers',
        ]);

        Classification::firstOrCreate([
            'title' => 'Family members of AFP and PNP Killed-and-Wounded In-Action',
        ]);

        Classification::firstOrCreate([
            'title' => 'Informal Workers',
        ]);

        Classification::firstOrCreate([
            'title' => 'TESDA Alumni',
        ]);
    }
}
