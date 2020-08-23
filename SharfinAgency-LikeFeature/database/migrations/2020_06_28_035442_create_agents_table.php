<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('agency');
            $table->string('job');
            $table->string('name');
            $table->date('birth_date');
            $table->boolean('gender');
            $table->text('address');
            $table->string('phone');
            $table->string('picture')->nullable(true);
            $table->date('approve')->nullable(true);
            $table->timestamps();
        });
        (new AgentsTableSeeder())->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
