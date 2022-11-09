<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonatomicTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //script creating departement table fk faculty_id
        Schema::create('departement', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('faculty_id');
            $table->foreign('faculty_id')->references('id')->on('faculty');
            $table->enum('departement', ['Physique', 'Chimique']);
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });
        //script creating speciality table fk departement_id
        Schema::create('speciality', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departement');
            $table->string('name');
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });
        //script creating level table non fk
        Schema::create('level', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('level', ['L1', 'L2', 'L3', 'M1', 'M2']);
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });

        //script creating module table
        Schema::create('module', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('users_id');
            $table->unsignedSmallInteger('level_id');
            $table->unsignedSmallInteger('speciality_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('level_id')->references('id')->on('level');
            $table->foreign('speciality_id')->references('id')->on('speciality');
            $table->string('name');
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });
        //script creating tp table
        Schema::create('tp', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('module_id');
            $table->foreign('module_id')->references('id')->on('module');
            $table->string('name');
            $table->longText('rappel');
            $table->longText('objectif');
            $table->longText('materiel');
            $table->longText('questions');
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });
        //script creating step table
        Schema::create('step', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('tp_id');
            $table->foreign('tp_id')->references('id')->on('tp');
            $table->longText('steps');
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });
        //script creating type_3dObject table
        Schema::create('type_3dObject', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['Scene', 'Produit', 'Appareil']);
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });
        //script creating 3dObject table
        Schema::create('3dObject', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('type_3dObject_id');
            $table->foreign('type_3dObject_id')->references('id')->on('type_3dObject');
            $table->string('name');
            $table->string('path');
            $table->dateTime('creation_date');
            $table->dateTime('update_date');
            $table->timestamps();
        });

        Schema::create('departement_3dObject', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('departement_id');
            $table->unsignedSmallInteger('3dObject_id');
            $table->foreign('departement_id')->references('id')->on('departement');
            $table->foreign('3dObject_id')->references('id')->on('3dObject');
            $table->string('name');
            $table->string('path');
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
        Schema::dropIfExists('tp');
        Schema::dropIfExists('departement');
        Schema::dropIfExists('3dObject');
        Schema::dropIfExists('type_3dObject');
        Schema::dropIfExists('module');
        Schema::dropIfExists('level');
        Schema::dropIfExists('speciality');
        Schema::dropIfExists('departement_3dObject');
    }
}
