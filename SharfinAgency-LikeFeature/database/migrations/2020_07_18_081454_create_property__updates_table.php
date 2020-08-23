<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_updates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('property')->nullable(true);
            $table->integer('agent');
            $table->string('category');
            $table->integer('isSell')->nullable(true);
            $table->integer('isRent')->nullable(true);
            $table->string('name');
            $table->integer('bath_room');
            $table->integer('bed_room');
            $table->integer('stories');
            $table->integer('land_area');
            $table->integer('building_area');
            $table->string('location')->nullable(true)->default("");
            $table->text('address');
            $table->text('description');
            $table->string('image',5120)->nullable(true);
            $table->string('main_image')->nullable(true);
            $table->timestamps();
        });
        (new PropertyUpdatesTableSeeder())->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property__updates');
    }
}
