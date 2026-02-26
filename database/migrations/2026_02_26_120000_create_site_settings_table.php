<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('CÔNG TY TNHH STUDIO NỘI THẤT BICSPACE');
            $table->string('brand_name')->default('Studio Nội Thất');
            $table->string('logo_url')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('hotline')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('working_hours')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
