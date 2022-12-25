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
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faculty_id')->nullable();
           // $table->unsignedBigInteger('speciality_id')->nullable();
            $table->enum('departement', ['Physique', 'Chimique']);
            $table->timestamps();
            /*$table->foreign('speciality_id')
                ->references('id')
                ->on('specialities')
                ->onDelete('set null')
                ->onUpdate('cascade');*/
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete("set null")->onUpdate("cascade");
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("departements");
    }
};