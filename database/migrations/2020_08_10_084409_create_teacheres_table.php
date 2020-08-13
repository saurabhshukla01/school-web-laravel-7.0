<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacheres', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->string('teacher_email');
            $table->integer('subject_category');
            $table->string('teacher_image')->nullable();
            $table->integer('mobile')->nullable();
            $table->text('about_me')->nullable();
            $table->text('qualification')->nullable();
            $table->enum('best_teacher',['Yes','No'])->default('No');
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
        Schema::dropIfExists('teacheres');
    }
}
