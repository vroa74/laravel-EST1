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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('grado');
            $table->string('grupo', 1);
            $table->boolean('sex')->default(1); // 1 = masculino (por convención)
            $table->string('Fnom');
            $table->string('nombres')->nullable();
            $table->string('apa')->nullable();
            $table->string('ama')->nullable();
            $table->date('fnac')->nullable();
            $table->boolean('status')->default(1); // 1 = activo, 0 = inactivo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
