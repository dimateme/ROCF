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
        Schema::create('directions', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('direction', 100);
            $table->string('lien_site', 250);
            $table->string('courriel', 250);
            $table->string('telephone', 50);
            $table->string('adresse', 150);
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
        Schema::dropIfExists('directions');
    }
};
