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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('objet_de_maintenance');
            $table->string('type_de_maintenance');
            $table->date('date_de_maintenance');
            $table->boolean('presence_materiel');
            $table->foreignId('intervenant_id')->constrained('intervenants');
            $table->foreignId('materiel_id')->constrained('materiels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance');
    }
};
