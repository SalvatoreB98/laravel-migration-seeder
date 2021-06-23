<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacchettiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacchetti', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titolo');
            $table->string('prezzo');
            $table->string('luogo');
            $table->date('data di inizio');
            $table->integer('durata in giorni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacchetti');
        Schema::dropIfExists('titolo');
    }
}
