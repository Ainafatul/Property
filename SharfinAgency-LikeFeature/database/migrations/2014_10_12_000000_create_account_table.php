<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $statement = "ALTER TABLE MY_TABLE AUTO_INCREMENT = 1231213123;";
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        $seeder = new AccountsTableSeeder();
        $seeder->run();
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
