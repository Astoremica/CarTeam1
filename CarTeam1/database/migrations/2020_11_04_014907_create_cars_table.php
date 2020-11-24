<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->string('CARNO')->comment('車台NO');
            $table->integer('STATS')->comment('状況')->default(0);
            $table->boolean('KOKSN')->comment('国産車');
            $table->boolean('ONEON')->comment('ワンオーナー車');
            $table->boolean('USRBY')->comment('ユーザー買取');
            $table->string('UKENO')->comment('受付番号');
            $table->integer('TYOID')->comment('帳票ID');
            $table->string('NENSK')->comment('年式');
            $table->string('CARNM')->comment('車種名');
            $table->string('MKRNM')->comment('メーカー名');
            $table->string('HIKRY')->comment('排気量');
            $table->string('MDLNE')->comment('モデル年式')->nullable();
            $table->string('GRADE')->comment('グレード');
            $table->char('NENRY', 1)->comment('燃料');
            $table->string('HANRT')->comment('販売ルート');
            $table->boolean('RHAND')->comment('右ハンドル');
            $table->string('KATSK')->comment('型式');
            $table->integer('TEIIN')->comment('乗車定員');
            $table->char('KDHSK', 3)->comment('駆動方式');
            $table->integer('DOASU')->comment('ドア数');
            $table->string('KEIZO')->comment('形状');
            $table->integer('SKSRY')->comment('最大積載量')->nullable();
            $table->integer('SOUKM')->comment('走行距離(km)');
            $table->integer('MTRPN')->comment('メーターパネル状態');
            $table->string('GAISK')->comment('外装色');
            $table->boolean('TWOTN')->comment('ツートン');
            $table->string('GAINO')->comment('外装色カラーNO')->nullable();
            $table->string('COLOR')->comment('色（何系）');
            $table->boolean('IROKE')->comment('色替有無');
            $table->string('NAISK')->comment('内装色');
            $table->string('NAINO')->comment('内装色カラーNO')->nullable();
            $table->boolean('SNSHS')->comment('新車保証書');
            $table->boolean('TRIST')->comment('取扱説明書');
            $table->char('SFTNB', 1)->comment('シフトノブ位置');
            $table->boolean('MISYN')->comment('ミッション');
            $table->integer('GIASU')->comment('ギア数');
            $table->char('AIRBG', 1)->comment('エアバッグ');
            $table->string('AIRCN')->comment('エアコン');
            $table->boolean('SUNRF')->comment('サンルーフ');
            $table->integer('ENOSY')->comment('8ナンバー種別');
            $table->boolean('NOXFG')->comment('Nox');
            $table->integer('KENKG')->comment('検査期限');
            $table->string('TNORK')->comment('登録NO陸事（カナ）');
            $table->string('TNOBN')->comment('登録NO分類');
            $table->string('TNOKN')->comment('登録NOカナ');
            $table->string('TNORN')->comment('登録NO連番');
            $table->string('MIHKG')->comment('名変期限');
            $table->integer('CARRK')->comment('車歴');
            $table->string('KTSNO')->comment('型式指定番号');
            $table->char('RKBNO', 3)->comment('類別区分番号');
            $table->boolean('SYURK')->comment('修復履歴');
            $table->boolean('JAKKI')->comment('ジャッキ');
            $table->boolean('KOUGU')->comment('工具');
            $table->text('COMNT')->comment('コメント');
            $table->integer('KTRKN')->comment('買取金額（千円');
            $table->unsignedBigInteger('auction_id')->nullable()->comment('オークションID');
            $table->integer('no')->nullable()->comment('順序NO');
            $table->integer('start_price')->nullable()->comment('スタート価格');
            $table->integer('min_price')->nullable()->comment('最小価格');
            $table->string('stats')->nullable()->comment('売り方ステータス');
            $table->timestamps();
            $table->primary('CARNO');

            $table->foreign('auction_id')
                ->references('id')
                ->on('auctions')
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
        Schema::dropIfExists('cars');
    }
}
