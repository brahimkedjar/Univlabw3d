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
        Schema::create('3dObjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_3dObject_id')->nullable();
            $table->string('object_name');
            $table->string('path');
            $table->timestamps();
            $table->foreign('type_3dObject_id')->references('id')->on('type_3dObjects')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('3dObjects');
    }
};