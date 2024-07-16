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
        Schema::create('logiciels', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('licence');
            $table->string('version');
            $table->string('editeur');
            $table->integer('date_achat_licence');
            $table->integer('date_expiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logiciels');
    }
};
