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
        Schema::create('project_contact_company', function (Blueprint $table) {
            //$table->id();
            $table->id('project_contact_company_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('company_id');
            $table->string('role', 255)->nullable();
            $table->boolean('project_main')->default(0);
            $table->text('project_note')->nullable();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
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
        Schema::dropIfExists('project_contact_company');
    }
};
