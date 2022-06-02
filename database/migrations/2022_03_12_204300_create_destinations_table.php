<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id('destination_id');
            $table->string('destination_name', 100);
            $table->text('destination_description');
            $table->string('destination_location', 500);
            $table->string('destination_day_temp', 5);
            $table->string('destination_night_temp', 5);
            $table->integer('destination_rating');
            $table->longText('destination_image')->nullable(true);
            $table->unsignedBigInteger('destination_category_id')->nullable(true);
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
        Schema::dropIfExists('destinations');
    }
}
