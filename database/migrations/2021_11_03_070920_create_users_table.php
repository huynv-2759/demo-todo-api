<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('phone');
            $table->String('email');
            $table->String('password');
            $table->timestamps();
        });
        DB::table('users')->insert([
            'name'=> "Huy Nguyen",
            'phone'=> "0329714666",
            'email'=> "huyculy211299@gmail.com",
            'password'=> Hash::make("123456")
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
