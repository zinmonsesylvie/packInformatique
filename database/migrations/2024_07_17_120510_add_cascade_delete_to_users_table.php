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
            $table->dropForeign(['service_id']); // Supprimer d'abord la contrainte existante
            $table->foreign('service_id')
                  ->references('id')
                  ->on('services')
                  ->onDelete('cascade'); // Ajouter la suppression en cascade
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['service_id']); // Supprimer la contrainte de cascade
            $table->foreign('service_id')
                  ->references('id')
                  ->on('services'); // Recréer la contrainte sans cascade
        });
    }
};