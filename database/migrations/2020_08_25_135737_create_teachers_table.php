<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('teacher_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('phone');
            $table->longText('address');
            $table->string('nationality');
            $table->string('passport');
            $table->tinyInteger('status');
            $table->date('dateregistered');
            $table->string('user_id');
            $table->mediumText('image')->nullable();
            $table->softDeletes();
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
