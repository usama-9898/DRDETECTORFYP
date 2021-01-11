<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportscamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportscam', function (Blueprint $table) {
            $table->id();
            $table->string('scamcategory');
            $table->string('scammername');
            $table->integer('cnic');
            $table->integer('contactno');
            $table->string('city');
            $table->string('vehicletype');
            $table->string('registrationno');
            $table->string('propertyaddress');
            $table->string('scammingpage');
            $table->text('scamstory');
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
        Schema::dropIfExists('reportscam');
    }
}
