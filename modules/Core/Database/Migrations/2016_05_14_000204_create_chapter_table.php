<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('manga_id')->unsigned();
            $table->integer('order')->unsigned();
            $table->string('title')->nullable();
            $table->timestamp('release_date')->nullable();
            $table->timestamps();

            $table->foreign('manga_id')->references('id')->on('manga')->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('page', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter_id')->unsigned();
            $table->integer('page_num')->unsigned();
            $table->string('img_path', 255);
            $table->timestamps();

            $table->foreign('chapter_id')->references('id')->on('chapter')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page');
        Schema::dropIfExists('chapter');
    }

}
