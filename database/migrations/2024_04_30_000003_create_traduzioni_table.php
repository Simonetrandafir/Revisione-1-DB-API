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
        Schema::create('traduzioni', function (Blueprint $table) {
            $table->id('idTraduzione');
            $table->unsignedBigInteger('idLingua')->index();
            $table->string('chiave',255);
            $table->string('valore',255);

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idLingua')->references('idLingua')->on('lingue');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traduzioni');
    }
};
