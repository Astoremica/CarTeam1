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
            $table->bigIncrements('id')->comment('id');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->string('name1')->comment('姓');
            $table->string('name2')->comment('名');
            $table->string('furi1')->comment('性フリガナ');
            $table->string('furi2')->comment('名フリガナ');
            $table->string('tel')->comment('電話番号');
            $table->string('name3')->comment('ニックネーム');
            $table->string('postal_code')->comment('郵便番号');
            $table->string('address1')->comment('住所（都道府県）');
            $table->string('address2')->comment('住所（市）');
            $table->string('address3')->comment('住所（移行）');
            $table->integer('birthday')->comment('誕生日(数値）');
            $table->timestamp('email_verified_at')->nullable()->comment('メアド認証');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
