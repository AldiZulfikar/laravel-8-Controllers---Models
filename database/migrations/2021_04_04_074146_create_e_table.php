<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 36);
            $table->uuid('role_id');
            $table->foreign('role_id')->references('id')->on('roles');

            $table->string('email', 150);
            $table->string('password', 60);
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e');
    }
}
