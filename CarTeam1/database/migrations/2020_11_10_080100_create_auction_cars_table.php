<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_cars', function (Blueprint $table) {
            $table->unsignedBigInteger('auction_id')->comment('オークションID');
            $table->integer('no')->comment('順序NO');
            $table->string('CARNO')->comment('車台NO');
            $table->integer('start_price')->comment('スタート価格');
            $table->integer('min_price')->nullable()->comment('最小価格');
            $table->string('stats')->nullable()->comment('売り方ステータス');
            $table->timestamps();

            $table->primary('auction_id','no');

            $table->foreign('auction_id')
                ->references('id')
                ->on('auctions')
                ->onDelete('cascade');
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
        Schema::dropIfExists('auction_cars');
    }
}
