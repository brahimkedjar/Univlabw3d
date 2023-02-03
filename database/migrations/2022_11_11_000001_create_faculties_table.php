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
        Schema::create('faculties', function (Blueprint $table){
            $table->id();
            // $table->string('faculty')->nullable();
            $table->enum('faculty', ['Sciences', 'Medicine', 'Institute of Architecture and Earth Sciences', 'Science of Nature and Life', 'Economics, Business and Management Sciences', 'Technology', '
            Institute of Optics and Precision Mechanics']);
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
        Schema::dropIfExists('faculties');
    }
};