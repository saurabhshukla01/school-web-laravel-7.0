<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallariesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallaries_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('school_category_id');
            $table->string('image_title');
            $table->string('gallary_image')->nullable();
            $table->string('gallary_video')->nullable();
            $table->enum('latest_image_video',['Yes','No'])->default('No');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('gallaries_tables');
    }
}
