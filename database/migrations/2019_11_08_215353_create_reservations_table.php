<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('restaurant_id');
            $table->unsignedBigInteger('commande_id')->nullable();
            $table->integer('nombre_personnes');
            $table->integer('nombre_min_personnes')->nullable();
            $table->integer('nombre_max_personnes')->nullable();
            $table->time('conservation_table')->nullable();
            $table->date('date');
            $table->time('heure');
            $table->string('designiation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
