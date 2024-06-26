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
        Schema::create('contatti', function (Blueprint $table) {
            $table->id('idContatto');

            $table->unsignedBigInteger('idStato');
            $table->string('nome',45);
            $table->string('cognome',45);
            $table->unsignedTinyInteger('sesso')->nullable();
            $table->string('codFiscale',45)->nullable();
            $table->string('partitaIva',45)->nullable();
            $table->string('cittadinanza',45)->nullable();
            $table->unsignedBigInteger('idNazione')->nullable();
            $table->string('citta',45)->nullable();
            $table->string('provincia',45)->nullable();
            $table->date('dataNascita')->nullable();


            $table->timestamps();

            $table->foreign("idNazione")->references("idNazione")->on("nazioni");
            $table->foreign("idStato")->references("idStato")->on("stati");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatti');
    }
};
