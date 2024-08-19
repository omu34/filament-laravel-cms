<?php

namespace Database\Seeders;

use App\Models\Pages\Section;
use App\Models\Sections\Banner;
use Illuminate\Database\Seeder;
use App\Models\Sections\FaqsContent;
use App\Models\Sections\LoanAppForm;
use App\Models\Sections\TermsContent;
use App\Models\Sections\LoanCalculator;
use App\Models\Sections\CenteredCtaText;
use App\Models\Sections\AppMultistepForm;
use App\Models\Sections\RecommendedProduct;
use App\Models\Sections\TextLeftImageRight;
use App\Models\Sections\TextRightImageLeft;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ['Banner', Banner::class, 'placeholder.png'],
            ['Centered CTA Text', CenteredCtaText::class, 'placeholder.png'],
            ['Text Right Image Left', TextRightImageLeft::class, 'placeholder.png'],
            ['Text Left Image Right', TextLeftImageRight::class, 'placeholder.png'],
            ['Loan Calculator', LoanCalculator::class, 'placeholder.png'],
            ['Recommended Products', RecommendedProduct::class, 'placeholder.png'],
            ['FAQs Content', FaqsContent::class, 'placeholder.png'],
            ['Loan App Form', LoanAppForm::class, 'placeholder.png'],
            ['Terms & Conditions', TermsContent::class, 'placeholder.png'],
        ];

        foreach ($sections as $section) {
            Section::create([
                'name' => $section[0],
                'model_type' => $section[1],
                'thumbnail' => $section[2],
            ]);
        }
    }
}
