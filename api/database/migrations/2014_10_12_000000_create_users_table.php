<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->id();
            $table->foreignId('user_role_id')->constrained('user_roles');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('mobilePhone')->nullable();
            $table->string('fixedPhone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('street');
            $table->integer('houseNumber');
            $table->string('box');
            $table->integer('postalCode');
            $table->string('city');
            $table->boolean('uitPas');
            $table->timestamp('paymentReceived')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
