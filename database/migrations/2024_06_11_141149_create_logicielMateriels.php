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
        Schema::create('logicielMateriels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materiel_id')->constrained('materiels');
            $table->foreignId('logiciel_id')->constrained('logiciels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logiciel_materiels');
    }
};
