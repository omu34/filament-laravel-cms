<?php

use App\Models\Loans\InsuranceCompany;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number')->unique();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('dealer_id')->nullable()->constrained();
            $table->foreignId('agent_id')->nullable()->constrained();
            $table->integer('amount');
            $table->enum('premium_financing', ['yes', 'no'])->default('no');
            $table->foreignIdFor(InsuranceCompany::class)->nullable()->constrained();
            $table->enum('status', ['draft', 'pending', 'approved', 'denied'])->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
