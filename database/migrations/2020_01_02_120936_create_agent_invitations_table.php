<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_invitations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent_email_address');
            $table->string('message')->nullable();
            $table->integer('invited_by')->unsigned()->index()->nullable();
            $table->foreign('invited_by')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('invitation_status')->default(false);
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
        Schema::dropIfExists('agent_invitations');
    }
}
