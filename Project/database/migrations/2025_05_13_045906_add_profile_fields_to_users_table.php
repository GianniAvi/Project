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
        Schema::table('users', function (Blueprint $table) {
            // Fecha de Nacimiento
            $table->date('birthdate')->nullable();

            // Nivel de Conocimiento en Robótica (1-5)
            $table->tinyInteger('robotics_level')->unsigned()->default(1)->comment('Nivel de conocimiento sobre robótica (1-5)');

            // Nivel Académico (Campo de texto libre)
            $table->string('academic_level', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['birthdate', 'robotics_level', 'academic_level']);
        });
    }
};