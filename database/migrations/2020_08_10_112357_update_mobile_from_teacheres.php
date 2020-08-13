<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMobileFromTeacheres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('teacheres', 'mobile')){
  
            Schema::table('teacheres', function (Blueprint $table) {
                $table->dropColumn('mobile');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacheres', function (Blueprint $table) {
            //
        });
    }
}
