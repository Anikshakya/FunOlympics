<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('alternative_email')->nullable();
            $table->string('number')->nullable();
            $table->string('alternative_number')->nullable();
            $table->text('google_map')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('skype_link')->nullable();


            $table->string('navbar_logo')->nullable();
            $table->string('navbar_link')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('footer_link')->nullable();
            
            $table->text('description')->nullable();
           

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
        Schema::dropIfExists('contactuses');
    }
}
