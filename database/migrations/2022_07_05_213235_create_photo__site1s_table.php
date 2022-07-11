<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoSite1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo__site1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('main_image')->nullable(false);
            $table->string('image_1')->nullable(false);
            $table->string('image_2')->nullable(false);
            $table->string('image_3')->nullable(false);
            $table->string('image_4')->nullable(false);
            $table->string('heading_text_1')->nullable(false);
            $table->string('heading_sentence_1')->nullable(false);
            $table->string('heading_text_2')->nullable(false);
            $table->string('heading_sentence_2')->nullable(false);
            $table->string('title_text_1')->nullable();
            $table->string('title_sentence_1')->nullable();
            $table->string('title_text_2')->nullable();
            $table->string('title_sentence_2')->nullable();
            $table->string('title_text_3')->nullable();
            $table->string('title_sentence_3')->nullable();
            $table->string('title_text_4')->nullable();
            $table->string('title_sentence_4')->nullable();
            $table->string('footer_heading')->nullable();
            $table->string('footer_sentence')->nullable();
            $table->string('copy-wright')->nullable(false);
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
        Schema::dropIfExists('photo__site1s');
    }
}
