<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diary_id');
            $table->unsignedInteger('tag_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('diary_id')
                ->references('id')
                ->on('diaries');
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_tag');
    }
}
