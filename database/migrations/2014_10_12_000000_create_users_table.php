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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->text('position');
            $table->text('department');
            $table->string('role')->default("user");
            $table->longText('image')->nullable();
            $table->integer('sick_leave_left')->default(env('SICK_LEAVE_DAYS'));
            $table->integer('personal_leave_left')->default(env('PERSONAL_LEAVE_DAYS'));
            $table->integer('vacation_leave_left')->default(env('VACATION_LEAVE_DAYS'));
            $table->integer('maternity_leave_left')->default(env('MATERNITY_LEAVE_DAYS'));
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
