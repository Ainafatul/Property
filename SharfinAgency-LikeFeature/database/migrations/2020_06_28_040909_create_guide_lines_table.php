<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('author');
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable(true);
            $table->timestamps();
        });
        (new GuideLinesTableSeeder())->run();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guide_lines');
    }
}
