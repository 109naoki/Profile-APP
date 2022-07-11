<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoSite3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo__site3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('main_image')->nullable(false);
            $table->string('nav_image_1')->nullable(false);
            $table->string('nav_image_2')->nullable(false);
            $table->string('nav_heading_1')->nullable(false);
            $table->string('nav_1')->nullable(false);
            $table->string('nav_text_1')->nullable(false);
            $table->string('nav_heading_2')->nullable(false);
            $table->string('nav_2')->nullable(false);
            $table->string('nav_text_2')->nullable(false);


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
        Schema::dropIfExists('photo__site3s');
    }
}
