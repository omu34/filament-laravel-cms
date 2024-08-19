<?php

namespace Database\Seeders;

use App\Models\Loans\Document;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salaryDocs = [
            'Copy of National ID/ Valid Passport',
            'Copy of PIN certificate',
            'Employment letter/contract letter',
            '3 months latest pay slips',
            '6 Months bank statement for non-Co-op bank customer',
            'Proforma invoice/sale agreement',
            'Log book copy/import documents',
            'Valuation Report',
        ];

        foreach ($salaryDocs as $doc) {
            Document::create([
                'name' => $doc,
                'income_source' => 'salary',
                'is_required' => true,
            ]);
        }

        $partnershipDocs = [
            'Copy of PIN certificate',
            'Copy of certificate of incorporation',
            'Copy of memorandum & articles of association',
            'Board resolution to borrow',
            '6 months banks statement for non-Coop bank customers',
            'Proforma invoice/sale agreement',
            'Log book copy/import documents'
        ];

        foreach ($partnershipDocs as $doc) {
            Document::create([
                'name' => $doc,
                'income_source' => 'business',
                'business_type' => 'partnership',
                'is_required' => true,
            ]);
        }

        $companyDocs = [
            'Copy of PIN certificate',
            'Valid business permit and/or operating licenses',
            'Registration certificate for registered business name',
            '6 months banks statement for non-Coop bank customers',
            'Proforma invoice/sale agreement',
            'Log book copy/import documents'
        ];

        foreach ($companyDocs as $doc) {
            Document::create([
                'name' => $doc,
                'income_source' => 'business',
                'business_type' => 'company',
                'is_required' => true,
            ]);
        }
    }
}
