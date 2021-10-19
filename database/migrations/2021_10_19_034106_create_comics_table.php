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
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('cover_image')->nullable()->comment('Image of comic');
            $table->string('thumbnail')->nullable()->comment('Thumbnail of comic');
            $table->unsignedBigInteger('user_id')->nullable()->comment('Member who post this comic');
            $table->unsignedBigInteger('translation_team_id')->nullable()->comment('Comic translate by team id (translation_teams table)');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
