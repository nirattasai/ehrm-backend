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
            $table->timeTz('login_time');
            $table->timeTz('logout_time');
            $table->boolean('is_late')->default(false);
            $table->boolean('is_leave')->default(false);
            $table->boolean('is_absent')->default(false);
            $table->float('total_hours')->default(0);

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
