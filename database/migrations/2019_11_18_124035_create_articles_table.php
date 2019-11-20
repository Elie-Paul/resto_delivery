<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('nom');
            $table->string('prix')->nullable();
            $table->string('description')->nullable();
            $table->string('taille_a')->nullable();
            $table->string('taille_b')->nullable();
            $table->string('taille_c')->nullable();
            $table->string('prix_a')->nullable();
            $table->string('prix_b')->nullable();
            $table->string('prix_c')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
