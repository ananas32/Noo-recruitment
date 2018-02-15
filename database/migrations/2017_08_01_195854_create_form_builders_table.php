<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('form_builders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('data_type_id')->unsigned();
            $table->text('details')->nullable();
            $table->softDeletes();

            $table->foreign('data_type_id')->references('id')->on('data_types')
<<<<<<< HEAD
                ->onUpdate('cascade')->onDelete('set null');
            $table->softDeletes();
=======
                ->onUpdate('cascade')->onDelete('cascade');
>>>>>>> ef9eace21576186673d7475bfa78af7c439326e0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_builders');
    }
}
