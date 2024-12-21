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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 100);
            $table->string('company_phone',20);
            $table->string('company_email', 100);
            $table->string('company_website');
            $table->string('registration_number', 10);
            $table->string('vat_number', 14);
            $table->string('siret_number')->nullable();
            $table->string('national_id_number')->nullable();
            $table->string('company_phone2')->nullable();
            $table->string('fax')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('address_id')->nullable()->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
