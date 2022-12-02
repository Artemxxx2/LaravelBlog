<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('post_id');
            $table->string('tag_id');
            $table->timestamps();

            $table->index('post_id','post_tags_post_idx');
            $table->index('tag_id','post_tags_tag_idx');

            $table->foreign('post_id','post_id_fk')->on('posts')->references('id');
            $table->foreign('tag_id','tag_id_fk')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
};
