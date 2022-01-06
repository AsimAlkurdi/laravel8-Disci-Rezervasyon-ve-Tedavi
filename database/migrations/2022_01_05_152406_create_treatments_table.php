<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 145);
            $table->string('keywords', 145)->nullable();
            $table->string('description', 145)->nullable();
            $table->string('detail', 145)->nullable();
            $table->string('image', 145)->nullable();
            $table->integer('categoryid')->nullable();
            $table->integer('usersid')->nullable();
            $table->float('price')->nullable();
            $table->string('status', 5)->nullable()->default('false');
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
        Schema::dropIfExists('treatments');
    }
}
