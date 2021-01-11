<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostdocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lostdocument', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('documenttype');
            $table->string('nameondocuments');
            $table->string('institutionondocuments');
            $table->integer('cnic');
            $table->string('vehicletype');
            $table->string('registrationno');
            $table->string('addressondoc');
            $table->string('placeoflost');
            $table->integer('contactno');
            $table->string('additionalinformation');
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
        Schema::dropIfExists('lostdocument');
    }
}
