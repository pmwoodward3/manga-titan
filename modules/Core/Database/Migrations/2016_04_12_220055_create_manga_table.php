<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_apps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 20);
            $table->string('name', 200);
            $table->string('content', 255);
        });

        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category', 40)->unique();
            $table->text('description')->nullable();
            $table->string('thumb',255)->nullable();
            $table->timestamps();
        });

        Schema::create('manga', function(Blueprint $table){
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('users_id')->unsigned()->nullable();
            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->string('thumb',255);
            $table->integer('views')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('CASCADE');
        });

        Schema::create('rating', function (Blueprint $table){
            $table->increments('id');
            $table->integer('manga_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->tinyInteger('rating')->unsigned();
            $table->timestamps();

            $table->foreign('manga_id')->references('id')->on('manga')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();

            $table->text('comment');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('commentable', function (Blueprint $table) {
            $table->integer('comment_id');
            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type');
        });

        Schema::create('favorite', function (Blueprint $table) {
            $table->integer('manga_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->timestamps();

            $table->foreign('manga_id')->references('id')->on('manga')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite');
        Schema::dropIfExists('commentable');
        Schema::dropIfExists('comment');
        Schema::dropIfExists('rating');
        Schema::dropIfExists('manga');
        Schema::dropIfExists('category');
        Schema::dropIfExists('config_apps');
    }

}
