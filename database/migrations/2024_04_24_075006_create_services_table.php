<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->unsignedBigInteger('structure_id');
             // Ajouter la contrainte de clé étrangère
             $table->foreign('structure_id')
             ->references('id')
             ->on('structures')
             ->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('services')->insert([
            ['libelle' => 'Service Informatique', 'structure_id' => 1]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
