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
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['structure_id']); // Supprimer la contrainte existante
            $table->foreign('structure_id')
                  ->references('id')
                  ->on('structures')
                  ->onDelete('cascade'); // Ajouter la suppression en cascade
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['structure_id']); // Supprimer la contrainte de cascade
            $table->foreign('structure_id')
                  ->references('id')
                  ->on('structures'); // Recréer la contrainte sans cascade
        });
    }
};