<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVardiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vardias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	    $table->datetime('mpike')->nullable();
	    $table->datetime('vgike')->nullable();
	    $table->integer('person_id');
	    $table->string('ypefthinos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vardias');
    }
}
