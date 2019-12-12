<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionheadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionheads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sectionhead_id');
            $table->foreign('sectionhead_id')
                  ->references('id')->on('sectionheads')
                  ->onDelete('cascade');
            $table->string('title');
            $table->string('isactive');
            
            
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
        Schema::dropIfExists('sectioheads');
    }
}
