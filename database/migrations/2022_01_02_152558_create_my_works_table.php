<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_works', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('img')->nullable();
            $table->string('category')->nullable();
            $table->string('main_tag')->nullable();
            $table->string('tags')->nullable();
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
            $table->integer('price')->nullable();
            $table->text('link')->nullable();
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
        Schema::dropIfExists('my_works');
    }
}
