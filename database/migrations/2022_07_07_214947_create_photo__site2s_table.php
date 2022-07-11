<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoSite2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo__site2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('main_image')->nullable(false);
            $table->string('title_image_1')->nullable(false);
            $table->string('title_image_2')->nullable(false);
            $table->string('title_image_3')->nullable();
            $table->string('title_image_4')->nullable();
            $table->string('heading_text_1')->nullable(false);
            $table->string('heading_sentence_1')->nullable(false);
            $table->string('heading_sentence_2')->nullable();
            $table->string('heading_sentence_3')->nullable();
            $table->string('heading_sentence_4')->nullable();
            $table->string('heading_sentence_5')->nullable();
            $table->string('detail')->nullable(false);
            $table->string('detail_heading_1')->nullable(false);
            $table->string('detail_heading_text_1')->nullable(false);
            $table->string('detail_heading_2')->nullable();
            $table->string('detail_heading_text_2')->nullable();
            $table->string('detail_heading_3')->nullable();
            $table->string('detail_heading_text_3')->nullable();
            $table->string('detail_heading_sentence_1')->nullable(false);
            $table->string('detail_heading_sentence_2')->nullable();
            $table->string('detail_heading_link_1')->nullable();

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
        Schema::dropIfExists('photo__site2s');
    }
}
