<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            
            $table->string('article_type')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('banner')->nullable();
            $table->string('image')->nullable();
            $table->string('location')->nullable();
            $table->string('date')->nullable();
            $table->integer('weight')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('status')->nullable();
           
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
        Schema::dropIfExists('news');
    }
}
