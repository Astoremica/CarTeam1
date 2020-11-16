<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('納品書ID');
            $table->datetime('n_date')->comment('納品日時');
            $table->string('CARNO')->comment('納品車台NO');
            $table->unsignedBigInteger('user_id')->comment('落札ユーザID');
            $table->unsignedBigInteger('employee_id')->comment('担当社員ID');
            $table->timestamps();

            $table->foreign('CARNO')
                ->references('CARNO')
                ->on('transactions')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('employee_id')
                ->references('id')
                ->on('employees')
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
        Schema::dropIfExists('delivery_notes');
    }
}
