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
            $table->string('company_name', 255);        
            $table->string('company_email', 100)->unique();
            $table->string('slug', 255);
            $table->string('password', 100);
            $table->text('address');
            $table->string('province', 255);
            $table->string('number_phone', 30);
            $table->string('photo_profile', 255)->nullable();
            $table->string('photo_banner', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('category_id', 255);
            $table->string('code_post')->nullable();
            $table->enum('status', ['active', 'pending', 'suspend']);


            $table->timestamps();
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
