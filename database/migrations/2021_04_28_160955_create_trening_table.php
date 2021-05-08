<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trening', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->integer('brojClanova');
            $table->string('dan');
            $table->boolean('zavrsen');

            $table->integer('user_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trening');
    }
}
