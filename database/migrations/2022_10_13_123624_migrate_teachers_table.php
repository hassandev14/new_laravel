<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
        $table->increments('id')->unsigned();
        $table->string('teacher_name',255);
        $table->string('father_name',255);
        $table->string('phone',255);
        $table->string('address',255)->nullable();
        $table->string('salary',255);
        $table->string('image_name',255)->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
