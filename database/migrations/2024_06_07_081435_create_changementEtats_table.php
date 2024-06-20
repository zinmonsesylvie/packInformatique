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
        Schema::create('changementEtats', function (Blueprint $table) {
            $table->id();
            $table->date('date_changement');
            $table->foreignId('etat_id')->constrained('etats');
            $table->foreignId('materiel_id')->constrained('materiels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changement_etats');
    }
};
