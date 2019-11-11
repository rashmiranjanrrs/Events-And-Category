<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorStoriesListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_stories_list_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('author_stories_lists_id')->unsigned();
            $table->foreign('author_stories_lists_id')
                ->references('id')
                ->on('author_stories_lists');
            $table->bigInteger('story_id')->unsigned();
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
        Schema::dropIfExists('author_stories_list_items');
    }
}
