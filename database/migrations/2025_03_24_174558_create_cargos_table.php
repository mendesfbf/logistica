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
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->timestamps();
        });

        Schema::create('cargo_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('cargo_id')->constrained()->cascadeOnDelete();
            $table->primary(['user_id', 'cargo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
