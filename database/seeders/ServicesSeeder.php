<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'Relocation/Boundary Survey',
            'Verification Survey',
            'Subdivision Survey',
            'Consolidation Survey',
            'Original Survey',
            'As-built Survey',
            'Mine Survey',
            'Column Layout',
            'Anchor Bolt Layout',
            'Construction Survey',
            'Topographic Survey',
            'Hydrographic Survey',
            'Aerial/Drone Survey',
            'CAAP Height Clearance Permit',
            'Signed & Sealed Lot Plan',
            'Building Permit Application Requirement',
            'Tree Tagging',
            'Google Earth Plotting'
        ];

        foreach ($services as $service) {
            \App\Models\Services::create([
                'name' => $service
            ]);
        }
    }
}
