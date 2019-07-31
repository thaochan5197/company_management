<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRealtyPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realty_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->string('title');
            $table->integer('category');
            $table->integer('sub_category');
            $table->text('description');
            $table->integer('info');
            $table->text('other_info');
            $table->text('images');
            $table->text('images');
            $table->string('contact_name');
            $table->string('contact_address');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->integer('type');
            $table->integer('date_start');
            $table->integer('date_end');
            $table->integer('province');
            $table->integer('district');
            $table->integer('wards');
            $table->integer('street');
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
        Schema::dropIfExists('realty_post');
    }
}
