<?php

namespace Database\Seeders;

use App\Models\Settings\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'name' => 'Nairobi Branch',
            'is_active' => true,
        ]);

        Branch::create([
            'name' => 'Mombasa Branch',
            'is_active' => true,
        ]);

        Branch::create([
            'name' => 'Kisumu Branch',
            'is_active' => true,
        ]);
    }
}
