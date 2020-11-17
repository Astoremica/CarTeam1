<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('請求書ID');
            $table->date('h_date')->comment('発行日');
            $table->string('CARNO')->comment('落札車台NO');
            $table->integer('price')->comment('請求金額');
            $table->date('end_date')->comment('支払期限');
            $table->unsignedBigInteger('bank_id')->comment('企業銀行ID');
            $table->unsignedBigInteger('user_id')->comment('落札ユーザID');
            $table->timestamps();

            $table->foreign('CARNO')
                ->references('CARNO')
                ->on('transactions')
                ->onDelete('cascade');
            $table->foreign('bank_id')
                ->references('id')
                ->on('company_banks')
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
        Schema::dropIfExists('invoices');
    }
}
