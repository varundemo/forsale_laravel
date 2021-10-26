<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recommended_by')->unsigned()->index();
            $table->foreign('recommended_by')->references('id')->on('users')->onDelete('cascade');
            $table->integer('recommended_to')->unsigned()->index();
            $table->foreign('recommended_to')->references('id')->on('users')->onDelete('cascade');
            $table->string('listing_no');
            $table->dateTime('time_and_date');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('recommendations');
    }
}
