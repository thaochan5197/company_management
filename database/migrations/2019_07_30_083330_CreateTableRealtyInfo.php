<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRealtyInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realty_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->text('name');
            $table->integer('area');
            $table->integer('price');
            $table->integer('price_type');
            $table->integer('province');
            $table->integer('district');
            $table->integer('wards');
            $table->integer('street');
            $table->string('address');
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
        Schema::dropIfExists('realty_info');
    }
}
