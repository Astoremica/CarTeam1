<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_statuses', function (Blueprint $table) {
            $table->string('CARNO')->comment('車台NO');
            $table->integer('no')->comment('位置番号');
            $table->string('stats')->comment('ステータス記号');
            $table->timestamps();

            $table->foreign('CARNO')
                ->references('CARNO')
                ->on('cars')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_statuses');
    }
}
