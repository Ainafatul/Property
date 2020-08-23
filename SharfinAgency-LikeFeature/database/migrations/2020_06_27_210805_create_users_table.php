<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
            $table->date('birth_date');
            $table->boolean('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('picture')->nullable(true);
            $table->timestamps();
        });
        (new UsersTableSeeder())->run();

    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
