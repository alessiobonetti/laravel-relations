<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("original_title")->nullable();
            $table->string("author",50);
            $table->smallInteger("comic_number");
            $table->smallInteger("n_pages");
            $table->string("edition",50);
            $table->string("rading",3);
            $table->float("price", 6,2);
            $table->boolean("colored")->default(false);
            $table->year("release");
            $table->string("cover")->default("https://via.placeholder.com/200x300");
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
        Schema::dropIfExists('comics');
    }
}
