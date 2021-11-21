<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();

            //NELLA TABELLA PONTE SI UNISCONO LE TUE TABELLE CHE HANNO LA RELAZIZONE TRAMITE AGGIUNTA DI FOREIGNE KEY.

            //aggiungiamo la colonna foreigne_key "post_id" del singolo post
            $table->unsignedBigInteger('post_id');
            //aggiungiamo la colonna foreigne_key "tag_id" del singolo post
            $table->unsignedBigInteger('tag_id');

            //aggiungiamo la connessione tra la colonna "post_id" e la relativa colonna "id" nella
            //tabella "posts"
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            //aggiungiamo la connessione tra la colonna "tag_id" e la relativa colonna "id" nella
            //tabella "tags"
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');//Cascade serve per eliminare il dato se uno dei due valori delle tabelle viene eliminato.


            // $table->timestamps(); Nella tabella ponte può essere rimosso timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
