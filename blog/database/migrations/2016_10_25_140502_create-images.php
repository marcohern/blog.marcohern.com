<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function($images) {
            $images->increments('id');
            $images->string('name',64);
            $images->string('type',128);
            $images->enum('density',['original','ldpi','mdpi','hdpi','xhdpi','xxhdpi','desktop'])->default('original');
            $images->enum('profile',['original','cover','index']);
            $images->integer('width');
            $images->integer('height');
            $images->unique(['density','profile','name']);
            $images->timestamps();
        });

        DB::statement("ALTER TABLE images ADD image LONGBLOB NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
