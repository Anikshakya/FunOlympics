<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('gallery_type')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('slider_caption')->nullable();
            $table->string('caption')->nullable();
            $table->integer('image_category_id')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('weight')->nullable();
            $table->boolean('status')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('media');
    }
}
