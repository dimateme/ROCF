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
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->foreign(['id_role'], 'fk_id_role')->references(['id'])->on('roles');
            $table->foreign(['id_direction'], 'fk_id_directions')->references(['id'])->on('directions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->dropForeign('fk_id_role');
            $table->dropForeign('fk_id_directions');
        });
    }
};
