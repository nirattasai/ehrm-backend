<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date');
            $table->timestampTz('login_time');
            $table->timestampTz('logout_time');
            $table->boolean('is_late')->default(false);
            $table->boolean('is_leave')->default(false);
            $table->boolean('is_absent')->default(false);
            $table->time('tatal_hours');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
