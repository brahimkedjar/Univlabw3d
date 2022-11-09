<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtomicTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //script creating role table non fk
       Schema::create('role', function (Blueprint $table) {
        $table->increments('id');
        $table->enum('role', ['Student', 'Teacher', 'Admin']);
        $table->dateTime('creation_date');
        $table->dateTime('update_date');
        $table->timestamps();
    });
    //script creating group table non fk
    Schema::create('group', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->dateTime('creation_date');
        $table->dateTime('update_date');
        $table->timestamps();
    });
    //script creating faculty table non fk
    Schema::create('faculty', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->dateTime('creation_date');
        $table->dateTime('update_date');
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

        Schema::dropIfExists('role');
        Schema::dropIfExists('group');
        Schema::dropIfExists('faculty');
    }
}
