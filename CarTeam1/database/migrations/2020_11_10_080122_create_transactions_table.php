<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('CARNO')->comment('車台NO');
            $table->integer('price')->comment('落札金額');
            $table->unsignedBigInteger('user_id')->comment('落札ユーザID');
            $table->integer('k_status')->default(0)->comment('決済状況');
            $table->integer('n_status')->default(0)->comment('納車状況');
            $table->date('pay_date')->nullable()->comment('入金日');
            $table->string('name')->nullable()->comment('入金者氏名');
            $table->timestamps();

            $table->foreign('CARNO')
                ->references('CARNO')
                ->on('cars')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('transactions');
    }
}
