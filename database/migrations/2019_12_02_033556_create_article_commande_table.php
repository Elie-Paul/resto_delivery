<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_commande', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('article_id')->unsigned();
            $table->integer('commande_id')->unsigned();
            $table->float('quantite');
            $table->float('prix_unitaire');
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
        Schema::dropIfExists('article_commande');
    }
}
