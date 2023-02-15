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
        Schema::table('fichiers', function (Blueprint $table) {
            $table->foreign(['id_utilisateur'], 'fk_id_utilisateur')->references(['id'])->on('utilisateurs');
            $table->foreign(['id_dossier'], 'fk_id_dossier')->references(['id'])->on('dossiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fichiers', function (Blueprint $table) {
            $table->dropForeign('fk_id_utilisateur');
            $table->dropForeign('fk_id_dossier');
        });
    }
};
