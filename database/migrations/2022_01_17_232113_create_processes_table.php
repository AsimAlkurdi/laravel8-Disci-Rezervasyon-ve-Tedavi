<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('treatmentid');
            $table->integer('usersid');
            $table->integer('doctorid');
            $table->integer('randevuid');
            $table->float('price');
            $table->integer('amount');
            $table->string('payment', 5)->default('no');
            $table->string('note');
            $table->string('status', 15)->default('expecting');
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
        Schema::dropIfExists('processes');
    }
}
