<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('message')->nullable();
            $table->integer('sender_id')->unsigned()->index();;
            $table->integer('recipient_id')->unsigned()->index();;
            $table->integer('status')->default(0);
            $table->timestamps();
        });

        Schema::table('file_transfers', function (Blueprint $table) {
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('recipient_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_transfers');
    }
}
