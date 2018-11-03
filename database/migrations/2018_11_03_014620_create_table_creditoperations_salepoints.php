<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCreditoperationsSalepoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditoperations_salepoints', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('creditoperation_id'); 
            $table->unsignedInteger('salepoint_id');
            $table->foreign('creditoperation_id')->references('id')->on('creditoperations');
            $table->foreign('salepoint_id')->references('id')->on('salepoints');            
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
        Schema::dropIfExists('creditoperations_salepoints');
    }
}
