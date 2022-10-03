<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('tokoid');
            $table->integer('userid');
            $table->string('nama');
            $table->varchar('supplierid');
            $table->varchar('categoryid');
            $table->integer('quantityperunit');
            $table->string('unitprice');
            $table->integer('unitinstock');
            $table->string('unitonorder');
            $table->varchar('reoderlevel');
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
        Schema::dropIfExists('product');
    }
}
