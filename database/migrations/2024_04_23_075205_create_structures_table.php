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
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('sigle');
            $table->string('adresse');
            $table->timestamps();
        });

        DB::table('structures')->insert([
            ['libelle' => 'Direction des Systèmes d\'Information', 'sigle' => 'DSI', 'adresse' => 'Cadjehoun'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structures');
    }
};
