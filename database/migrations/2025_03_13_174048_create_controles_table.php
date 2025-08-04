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
        Schema::create('controles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pessoas_id')->constrained();
            $table->foreignId('salas_id')->constrained()->nullable();
            $table->foreignId('projetores_id')->constrained()->nullable();
            $table->foreignId('notebooks_id')->constrained()->nullable();
            $table->string('extensao', 2)->nullable();
            $table->string('adaptador', 2)->nullable();
            $table->string('hdmi', 2)->nullable();
            $table->string('kit_apagador', 2)->nullable();  
            $table->string('status', 2)->nullable();
            $table->string('responsavel', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controles');
    }
};
