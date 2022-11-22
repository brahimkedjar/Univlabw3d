<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departement_3dObjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departement_id')->nullable();
            $table->unsignedBigInteger('3dObject_id')->nullable();
            // $table->string('name'); // TODO
            // $table->string('path'); // TODO
            $table->timestamps();
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete("set null")->onUpdate("cascade");
            $table->foreign('Object3d_id')->references('id')->on('Objects3d')->onDelete("set null")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departement_3dObjects');
    }
};