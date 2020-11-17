<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbbreviationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abbreviations', function (Blueprint $table) {
            $table->string('class')->comment('区分');
            $table->string('id')->comment('区分内ID');
            $table->string('name')->comment('正式名称');
            $table->text('information')->comment('情報');
            $table->timestamps();
            $table->primary('class','id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abbreviations');
    }
}
