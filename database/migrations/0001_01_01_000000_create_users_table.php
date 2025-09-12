<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('name');
            $table->string('password'); // hashed password
            $table->string('email')->unique();
            $table->enum('role', ['admin', 'uitvoerder', 'werkvoorbereiding'])->unique(); // ensures one user per role
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};