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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->integer('annee_de_service');
            $table->integer('date_max_acquisition');
            $table->string('fabriquant');
            $table->string('modele');
            $table->string('processeur');
            $table->string('memoire_ram');
            $table->string('capacite_disque_dur');
            $table->string('type_disque_dur');
            $table->integer('duree_de_vie');
            $table->integer('age_desuet');
            $table->string('type_de_materiel');
            $table->integer('temps_max_acquisition');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('agent_id')->constrained('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};
