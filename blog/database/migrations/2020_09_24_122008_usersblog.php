<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usersblog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersblog', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            $table->string('email');
            $table->string('password');
            $table->boolean('activated')->default('false');
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
        Schema::dropIfExists('usersblog');
    }
}
