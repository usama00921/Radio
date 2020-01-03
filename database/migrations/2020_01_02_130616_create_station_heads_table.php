<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_heads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('station_id')->nullable();
            $table->unsignedBigInteger('head_id')->nullable();
            $table->foreign('station_id')
                  ->references('id')->on('stations')
                  ->onDelete('cascade');
            $table->foreign('head_id')
                  ->references('id')->on('heads')
                  ->onDelete('cascade');
            $table->boolean('is_active');      
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
        Schema::dropIfExists('station_heads');
    }
}
