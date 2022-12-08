<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('construction');
            $table->string('location');
            $table->integer('floors');
            $table->integer('apartments');
            $table->integer('commercial_premises')->nullable();
            $table->string('amanities')->nullable();
            $table->integer('delivery_date');
            $table->integer('order');
            $table->string('main_image')->nullable();
            $table->string('availability');
            $table->string('brochure')->nullable();
            $table->tinyInteger('disabled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
