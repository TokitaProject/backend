<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->integer('idUser');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kecamatan');
            // $table->integer('tokoid');
            // $table->string('companyname');
            // $table->string('contactname');
            // $table->string('contacttitle');
            // $table->string('address');
            // $table->varchar('city');
            // $table->varchar('region');
            // $table->varchar('postalcode');
            // $table->varchar('phone');
            //$table->varchar('fax');
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
        Schema::dropIfExists('alamats');
    }
}
