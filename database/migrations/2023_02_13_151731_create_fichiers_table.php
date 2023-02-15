<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichiers', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('nom', 150);
            $table->string('description', 250);
            $table->string('type', 50);
            $table->string('taille', 100);
            $table->integer('id_dossier')->index('fk_id_dossier');
            $table->integer('id_utilisateur')->index('fk_id_utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichiers');
    }
};
