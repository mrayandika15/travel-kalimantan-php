<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_category', function (Blueprint $table) {
            $table->id('destination_category_id');
            $table->string('destination_category_name', 30);
            $table->longText('destination_category_image')->nullable(true);
            $table->timestamps();
        });

        Schema::table('destinations', function($table)
        {
            $table->foreign('destination_category_id')
            ->references('destination_category_id')
            ->on('destination_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destination_category');
    }
}
