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
        Schema::create('company_contact', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('company_id');
            $table->primary(['contact_id', 'company_id']);
            $table->boolean('main_company')->default(false);
            $table->date('entry_date')->nullable();
            $table->date('exit_date')->nullable();
            $table->string('job_title', 100)->nullable();
            $table->string('professional_email', 100)->nullable();
            $table->string('professional_mobile', 25)->nullable();
            //$table->boolean('validity_status')->default(true);

            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_contact');
    }
};
