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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('lastname', 50);
            $table->string('firstname', 50);
            //$table->string('fullname')->nullable();
            $table->string('professional_email', 100)->unique();
            $table->string('professional_phone', 20);
            $table->string('linkedin_url');
            $table->string('facebook_url')->nullable();
            $table->string('title', length: 50)->nullable();
            //$table->enum('gender', array_column(GenderType::cases(), 'value'));
            $table->string('mobile_phone', 20)->nullable();
            $table->string('personal_email', 20)->nullable();
            $table->string('contact_website')->nullable();
            $table->text('center_of_interest')->nullable();
            $table->text('note')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('address_id')->nullable()->constrained()->onDelete('cascade');

            $table->foreignId('interest_center_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
