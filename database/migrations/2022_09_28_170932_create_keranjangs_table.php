<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->integer('orderid');
            $table->integer('customerid');
            $table->integer('orderdate');
            $table->varchar('requireddate');
            $table->varchar('shippeddate');
            $table->integer('shipvia');
            $table->integer('freight');
            $table->varchar('shipname');
            $table->varchar('shipaddres');
            $table->varchar('shipcity');
            $table->smallint('shipregion');
            $table->varchar('shippostalcode');
            $table->integer('no.telp');
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
        Schema::dropIfExists('keranjang');
    }
}
