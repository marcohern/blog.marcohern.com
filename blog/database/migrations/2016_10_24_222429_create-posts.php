<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function($posts) {
            $posts->increments('id');
            //tbl->unsignedInteger('post_id')
            $posts->char('lang', 2);
            $posts->string('lslug' ,64);
            $posts->string('title',64);
            $posts->string('uslug' ,64)->unique();
            $posts->string('descr',255);
            $posts->longText('body');
            $posts->unsignedInteger('user_id');
            $posts->string('cover',64);
            $posts->enum('visible',['true','false'])->default('true');
            $posts->timestamps();
            $posts->unique(['lang','lslug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
