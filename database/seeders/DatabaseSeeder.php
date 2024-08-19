<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PageSeeder::class,
            SectionSeeder::class,
            PageSectionSeeder::class,
            BannerSeeder::class,
            CenteredCtaTextSeeder::class,
            TextRightImageLeftSeeder::class,
            TextLeftImageRightSeeder::class,
            LoanCalculatorSeeder::class,
            RecommendedProductSeeder::class,
            ProductSeeder::class,
            FaqsContentSeeder::class,
            FaqsSeeder::class,
            FooterSeeder::class,
            FooterLinksSeeder::class,
            SocialsSeeder::class,
            LoanAppFormSeeder::class,
            TermsContentSeeder::class,
            TermsSeeder::class,
            UserSeeder::class,
            DealerSeeder::class,
            BranchSeeder::class,
            DocumentSeeder::class,
            AgentSeeder::class,
            CustomerSeeder::class,
            InsuranceCompanySeeder::class,
            ApplicationSeeder::class,
            ExtraIncomeSeeder::class,
        ]);
    }
}
