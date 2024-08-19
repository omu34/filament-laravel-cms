<?php

namespace Database\Seeders;

use App\Models\Loans\Agent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agent::create([
            'user_id' => 3,
            'dealer_id' => 1,
            'is_active' => true,
        ]);
    }
}
