<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_rents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('price');
            $table->integer('minRent');
            $table->string('timeType');
            $table->timestamps();
        });
        (new PropertyRentsTableSeeder())->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_rents');
    }
}
