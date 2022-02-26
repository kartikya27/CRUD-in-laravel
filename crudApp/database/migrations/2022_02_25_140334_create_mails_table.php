<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('mails')) {
        Schema::create('mails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('senderName');
            $table->string('from');
            $table->string('to');
            $table->string('subject');
            
            $table->longText('emailText');
            $table->rememberToken();
            $table->integer('read')->default(0);
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
