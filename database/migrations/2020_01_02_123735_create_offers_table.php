<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_address');
            $table->string('listing_no');
            $table->double('purchase_price');
            $table->double('earnest_money');
            $table->boolean('financing');
            $table->double('down_payment');
            $table->double('seller_concession');
            $table->boolean('inspection');
            $table->double('property_tax');
            $table->boolean('contingency');
            $table->dateTime('offer_ends');
            $table->integer('offer_status')->default(0);
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('user_email')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
