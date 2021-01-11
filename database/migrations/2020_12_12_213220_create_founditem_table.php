<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFounditemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('founditem', function (Blueprint $table) {
            $table->id();
            $table->string('itemfound');
            $table->string('itemcolor');
            $table->string('nameondocuments');
            $table->string('inst_on_doc');
            $table->integer('cnic');
            $table->string('reg_on');
            $table->string('addressondoc');
            $table->string('placefound');
            $table->integer('contactno');
            $table->string('item_desc');
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
        Schema::dropIfExists('founditem');
    }
}
