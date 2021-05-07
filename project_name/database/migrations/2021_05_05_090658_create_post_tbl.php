<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('year');
            $table->string('imdbID');
            $table->string('type');
            $table->text('poster');
            $table->text('Rated');
            $table->text('Released');
            $table->text('Runtime');
            $table->text('Genre');
            $table->text('Director');
            $table->text('Writer');
            $table->text('Actors');
            $table->text('Plot');
            $table->text('Language');
            $table->text('Country');
            $table->text('Awards');
            $table->text('Ratings');
            $table->text('Metascore');
            $table->text('imdbRating');
            $table->text('imdbVotes');
            $table->text('DVD');
            $table->text('BoxOffice');
            $table->text('Production');
            $table->text('Website');
            $table->text('Response');
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
        Schema::dropIfExists('posts');
    }
}
