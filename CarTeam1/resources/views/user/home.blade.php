@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{asset('css/user/homeStyle.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
    <div class="plans">
        <div class="d-flex justify-content-around align-content-center">
            <h2 class="datePlans">2020年08月22日開催予定</h2>
            <form action="#" method="get">
                <input type="text" name="serchWord" id="serchWord">
                <button type="submit" id="search"><img src="{{asset('img/layout/search.png')}}" alt="検索"></button>
            </form>
        </div>
        <div>
            <div class="msContainer">
                <ul class="msItemWrapper">

                    <li class="car">
                        <!-- display:block -->
                        <a href="#">
                            <img src="{{asset('img/cars/EEQs-212k22_1.jpg')}}" alt="メーカー名:車種名" />
                            <p>トヨタ</p>
                            <p>ハリアー</p>
                            <p>開始：11:00</p>
                        </a>
                    </li>
                    <li class="car">
                        <!-- display:block -->
                        <a href="#">
                            <img src="{{asset('img/cars/G-332-22_1.jpg')}}" alt="メーカー名:車種名" />
                            <p>メルセデス・ベンツ</p>
                            <p>C180アバンギャルド</p>
                            <p>開始：11:10</p>
                        </a>
                    </li>
                    <li class="car">
                        <!-- display:block -->
                        <a href="#">
                            <img src="{{asset('img/cars/Z12-123456-1.jpg')}}" alt="メーカー名:車種名" />
                            <p>スズキ</p>
                            <p>クロスビー</p>
                            <p>開始：11:20</p>
                        </a>
                    </li>
                    <li class="car">
                        <!-- display:block -->
                        <a href="#">
                            <img src="{{asset('img/cars/GGD2-111456_1.jpg')}}" alt="メーカー名:車種名" />
                            <p>ランドローバー</p>
                            <p>ディスカバリー</p>
                            <p>開始：11:30</p>
                        </a>
                    </li>
                    <li class="car">
                        <!-- display:block -->
                        <a href="#">
                            <img src="{{asset('img/cars/Z12-121111_1.jpg')}}" alt="メーカー名:車種名" />
                            <p>ランドローバー</p>
                            <p>ディスカバリー</p>
                            <p>開始：11:30</p>
                        </a>
                    </li>
                </ul>

            </div>
            <a href="#">開催予定一覧へ</a>
        </div>
        <div class="serchMaker">
            <h2>メーカーから探す</h2>
            <ul>
                <li>国産</li>
                <li><a href=""><img src="{{asset('img/brands/domestic/lexus.png')}}" alt="メーカー名のロゴ" />レクサス</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/toyota.png')}}" alt="メーカー名のロゴ" />トヨタ</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/mazda.png')}}" alt="メーカー名のロゴ" />マツダ</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/daihatsu.png')}}" alt="メーカー名のロゴ" />ダイハツ</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/subaru.png')}}" alt="メーカー名のロゴ" />スバル</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/honda.png')}}" alt="メーカー名のロゴ" />ホンダ</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/mitsubishi.png')}}" alt="メーカー名のロゴ" />三菱</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/suzuki.png')}}" alt="メーカー名のロゴ" />スズキ</a></li>
                <li><a href=""><img src="{{asset('img/brands/domestic/nissan.png')}}" alt="メーカー名のロゴ" />日産</a></li>
            </ul>
            <ul>
                <li>輸入</li>
                <li><a href=""><img src="{{asset('img/brands/foreign/mercedes-benz.png')}}" alt="メーカー名のロゴ" />メルセデス・ベンツ</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/bmw.png')}}" alt="メーカー名のロゴ" />BMW</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/volks.png')}}" alt="メーカー名のロゴ" />フォルクスワーゲン</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/audi.png')}}" alt="メーカー名のロゴ" />アウディ</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/mini.png')}}" alt="メーカー名のロゴ" />ミニ</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/porsche.png')}}" alt="メーカー名のロゴ" />ポルシェ</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/volvo.png')}}" alt="メーカー名のロゴ" />ボルボ</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/peugeot.png')}}" alt="メーカー名のロゴ" />プジョー</a></li>
                <li><a href=""><img src="{{asset('img/brands/foreign/citroen.png')}}" alt="メーカー名のロゴ" />シトロエン</a></li>
            </ul>
        </div>
        <div class="serchBodyType">
            <h2>ボディータイプから探す</h2>
            <ul>
                <li><a href=""><img src="" alt="ボディータイプの画像" />軽自動車</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />コンパクトカー</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />ミニバン</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />SUV・クロカン</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />セダン</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />オープンカー</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />トラック</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />軽自動車</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />コンパクトカー</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />ミニバン</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />SUV・クロカン</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />セダン</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />オープンカー</a></li>
                <li><a href=""><img src="" alt="ボディータイプの画像" />トラック</a></li>

            </ul>
        </div>
    </div>
    @endsection
    <script type="module" src="{{ asset('js/infiniteslide.js') }}"></script>
    <script type="module" src="{{ asset('js/jquery.pause.min.js') }}"></script>
    <script type="module">
        (function(){
            $(window).on('load',function() {
                $('.msContainer').infiniteslide({
                'height': 400, //高さ
                'speed': 10, //速さ
                'direction' : 'left', //向き
                'pauseonhover': true //マウスオーバーでストップ
            });
        });
        
            // var $container = $(".msContainer"), //リストのコンテナ
            //     $itemWrapper = $(".msItemWrapper", $container), //リストの親要素
            //     $item = $(".car", $itemWrapper); //それぞれの要素
            // console.log($item.length);
            // var FPS = 1000 / 60 >> 0, //FPS (60にある数字が大きい程滑らかに動くけど、重たくなる)
            //     timerID = null; //タイマー変数

            // var cw = $container.width(), //コンテナの横幅
            //     cl = $container.offset().left, //コンテナのページ内の座標
            //     xe = 0, //右端の終点
            //     vx = 0, //X移動量
            //     mx = 0, //X移動量
            //     per = 0; //マウス位置のパーセント

            // var maxSpd = 12, //移動速度の最大値
            //     defaultSpd = 1, //移動速度のデフォルト値
            //     spd = defaultSpd; //現在の移動速度

            // // 初期化
            // function initialize() {

            //     // リストのラッパーサイズを確定します
            //     $itemWrapper.width($item.outerWidth() * $item.length);

            //     // ラッパーのサイズが確定したら、右端の終点位置を計算します
            //     xe = ($itemWrapper.outerWidth() - cw) * -1;

            //     // 各イベントを発行します
            //     $container
            //         .bind("mousemove", onMouseMove)
            //         .bind("mouseleave", onMouseOut);

            //     // タイマースタート
            //     timerID = setInterval(onEnterFrame, FPS);

            // }

            // // マウスムーブ
            // function onMouseMove(e) {
            //     vx = e.clientX - cl;
            //     per = Math.floor((vx / cw) * 100);
            //     per = (per / 50) - 1;
            //     spd = maxSpd * per;
            // }

            // // マウスアウト
            // function onMouseOut(e) {
            //     spd = defaultSpd;
            // }

            // // エンターフレーム
            // function onEnterFrame() {
            //     mx = mx - spd;

            //     // 左端を超えたら
            //     if (mx > 0) {
            //         mx = 0;

            //         // 右端を超えたら
            //     } else if (mx < xe) {
            //         // setTimeout(
            //         //     mx = 0,2000);
            //         mx = xe;
            //     }

            //     // 計算した移動値を反映します
            //     $itemWrapper.css("left", mx);
            // }

            // // コンテンツの読み込みが完了したら初期化を実行 (画像サイズが取れなくなることを防ぐ)
            // $(window).on('load',function() {
            //     initialize();
            // });
        })();
    </script>

    <!-- header -->
    @include('common.footer')