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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 150);
            $table->string('name', 255);
            $table->string('email')->unique();            
            $table->string('password');            
            $table->string('number_phone', 30);            
            $table->integer('category_id', false);            
            $table->date('datebirth');
            $table->string('academy', 100);
            $table->string('photo', 255);
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'pending', 'suspend']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
