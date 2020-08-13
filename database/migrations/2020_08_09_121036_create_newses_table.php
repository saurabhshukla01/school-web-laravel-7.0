<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newses', function (Blueprint $table) {
            $table->id();
            $table->string('news_title');
            $table->integer('news_category');
            $table->string('event_location');
            $table->string('news_image');
            $table->date('news_date')->nullable();
            $table->text('description')->nullable();
            $table->enum('upcoming_news',['Yes','No'])->default('No');
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
        Schema::dropIfExists('newses');
    }
}
