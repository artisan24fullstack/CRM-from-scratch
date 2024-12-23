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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name', 240);
            $table->string('project_ref', 255)->nullable();
            $table->unsignedInteger('user_id');
            $table->boolean('public')->default(0);
            //$table->tinyInteger('status_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('actual_end_date')->nullable();
            $table->decimal('budget', 11, 2)->nullable();
            $table->decimal('expense', 11, 2)->nullable();
            $table->decimal('balance', 11, 2)->nullable();
            $table->text('notes')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->text('success_motivation')->nullable();
            $table->text('failure_motivation')->nullable();
            $table->tinyInteger('project_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
