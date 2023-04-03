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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id(); 
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dateofbirth');
            $table->string('address');
            $table->string('email');
            $table->string('contactno');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('pin');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
