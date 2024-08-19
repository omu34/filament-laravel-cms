<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loans\InsuranceCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InsuranceCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insuranceCompanies = [
            ['name' => 'Insurance X'],
            ['name' => 'Insurance Y'],
        ];

        foreach ($insuranceCompanies as $insuranceCompany) {
            InsuranceCompany::create($insuranceCompany);
        }
    }
}
