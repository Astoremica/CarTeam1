<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_comments', function (Blueprint $table) {
            $table->string('CARNO')->comment('車台NO');
            $table->boolean('KIZU')->comment('キズ');
            $table->boolean('KOGE')->comment('コゲ');
            $table->boolean('KGAN')->comment('コゲ穴');
            $table->boolean('YGRE')->comment('汚れ');
            $table->boolean('YBRE')->comment('破れ');
            $table->boolean('KNEN')->comment('禁煙車');
            $table->text('CMNT')->nullable()->comment('点検コメント');
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
        Schema::dropIfExists('car_comments');
    }
}
