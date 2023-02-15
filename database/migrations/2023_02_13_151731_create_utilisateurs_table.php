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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('courriel', 100);
            $table->string('mdp', 250);
            $table->string('prenom', 50);
            $table->string('nom', 50);
            $table->integer('id_role')->index('fk_id_role');
            $table->integer('id_direction')->index('fk_id_directions');
            $table->string('telephone', 11);
            $table->string('code_postal', 7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};
