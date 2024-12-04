<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key
            $table->string('email', 100)->unique(); // email as a string with max length of 100, and make it unique
            $table->string('password'); // password field
            $table->timestamps(); // automatically adds `created_at` and `updated_at` fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
