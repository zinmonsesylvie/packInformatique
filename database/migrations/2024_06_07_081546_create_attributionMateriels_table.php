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
        Schema::create('attributionMateriels', function (Blueprint $table) {
            $table->id();
            $table->date('date_attribution');
            $table->foreignId('materiel_id')->constrained('materiels');
            $table->foreignId('agent_id')->constrained('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribution_materiels');
    }
};
