<?php

namespace Database\Seeders;

use App\Models\Loans\Dealer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dealer::create([
            'user_id' => 2,
            'company_name' => 'Auto Motors',
            'location' => 'Nairobi, Kenya',
            'is_approved' => true,
        ]);

        Dealer::create([
            'user_id' => 5,
            'company_name' => 'XYZ Motors',
            'location' => 'Nairobi, Kenya',
            'is_approved' => true,
        ]);
    }
}
