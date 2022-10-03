<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->varchar('supplierID');
            $table->varchar('companyname');
            $table->varchar('contactname');
            $table->varchar('contacttitle');
            $table->varchar('addres');
            $table->varchar('city');
            $table->varchar('region');
            $table->varchar('postalcode');
            $table->varchar('phone');
            $table->varchar('fax');
            $table->varchar('homepage');
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
        Schema::dropIfExists('suppliers');
    }
}
