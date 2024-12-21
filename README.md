Instructions

```
php artisan make:migration create_addresses_table

php artisan make:migration create_contacts_table

php artisan make:migration create_companies_table

php artisan make:migration create_interest_centers_table

php artisan make:migration create_contact_interest_center_table


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
        Schema::create('contact_interest_center', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_id');
            $table->integer('interest_center_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_interest_center');
    }
};

```
