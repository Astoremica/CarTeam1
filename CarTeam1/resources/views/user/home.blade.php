@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{asset('css/user/homeStyle.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
    <form action="#" method="get" class="container__searchForm">
        <div class="container__searchForm__box">
            <input type="text" name="serchWord" placeholder="車名でさがす">
            <button type="submit" class="container__searchForm_searchButton"><img src="{{asset('img/layout/search.png')}}" alt="検索"></button>
        </div>
    </form>
    <hr>
    <div class="container__plans">
        <h2 class="container__plans__header"><img src="{{asset('img/layout/calendar.png')}}" alt="カレンダー">2020年08月22日開催予定</h2>
        <div class="container__plans__msContainer">
            <ul class="container__plans__msContainer__msItemWrapper">

                <li class="container__plans__msContainer__msItemWrapper__car">
                    <!-- display:block -->
                    <a href="#">
                        <img src="{{asset('img/cars/EEQs-212k22_1.jpg')}}" alt="メーカー名:車種名" />
                        <p class="brandName">トヨタ</p>
                        <p class="carName">ハリアー</p>
                        <p class="startTime">開始：11:00</p>
                    </a>
                </li>
                <li class="container__plans__msContainer__msItemWrapper__car">
                    <!-- display:block -->
                    <a href="#">
                        <img src="{{asset('img/cars/G-332-22_1.jpg')}}" alt="メーカー名:車種名" />
                        <p class="brandName">メルセデス・ベンツ</p>
                        <p class="carName">C180アバンギャルド</p>
                        <p class="startTime">開始：11:10</p>
                    </a>
                </li>
                <li class="container__plans__msContainer__msItemWrapper__car">
                    <!-- display:block -->
                    <a href="#">
                        <img src="{{asset('img/cars/Z12-123456-1.jpg')}}" alt="メーカー名:車種名" />
                        <p class="brandName">スズキ</p>
                        <p class="carName">クロスビー</p>
                        <p class="startTime">開始：11:20</p>
                    </a>
                </li>
                <li class="container__plans__msContainer__msItemWrapper__car">
                    <!-- display:block -->
                    <a href="#">
                        <img src="{{asset('img/cars/GGD2-111456_1.jpg')}}" alt="メーカー名:車種名" />
                        <p class="brandName">ランドローバー</p>
                        <p class="carName">ディスカバリー</p>
                        <p class="startTime">開始：11:30</p>
                    </a>
                </li>
                <li class="container__plans__msContainer__msItemWrapper__car">
                    <!-- display:block -->
                    <a href="#">
                        <img src="{{asset('img/cars/Z12-121111_1.jpg')}}" alt="メーカー名:車種名" />
                        <p class="brandName">ランドローバー</p>
                        <p class="carName">ディスカバリー</p>
                        <p class="startTime">開始：11:30</p>
                    </a>
                </li>
            </ul>

        </div>
        <p class="container__plans__auctionList">
            <a href="#">開催予定一覧へ</a>
        </p>
    </div>
    <hr>
    <div class="container__searchBrand">
        <h2>メーカーから探す</h2>
        <div class="container__searchBrand__domestic">
            <p>国産<a href="">すべて見る</a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/lexus.png')}}" alt="メーカー名のロゴ" /><span>レクサス</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/toyota.png')}}" alt="メーカー名のロゴ" /><span>トヨタ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/mazda.png')}}" alt="メーカー名のロゴ" /><span>マツダ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/daihatsu.png')}}" alt="メーカー名のロゴ" /><span>ダイハツ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/subaru.png')}}" alt="メーカー名のロゴ" /><span>スバル</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/honda.png')}}" alt="メーカー名のロゴ" /><span>ホンダ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/mitsubishi.png')}}" alt="メーカー名のロゴ" /><span>三菱</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/suzuki.png')}}" alt="メーカー名のロゴ" /><span>スズキ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/domestic/nissan.png')}}" alt="メーカー名のロゴ" /><span>日産</span></a></p>
        </div>
        <div class="container__searchBrand__foreign">
            <p>輸入<a href="">すべて見る</a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/mercedes-benz.png')}}" alt="メーカー名のロゴ" /><span>メルセデス・ベンツ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/bmw.png')}}" alt="メーカー名のロゴ" /><span>BMW</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/volks.png')}}" alt="メーカー名のロゴ" /><span>フォルクスワーゲン</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/audi.png')}}" alt="メーカー名のロゴ" /><span>アウディ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/mini.png')}}" alt="メーカー名のロゴ" /><span>ミニ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/porsche.png')}}" alt="メーカー名のロゴ" /><span>ポルシェ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/volvo.png')}}" alt="メーカー名のロゴ" /><span>ボルボ</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/peugeot.png')}}" alt="メーカー名のロゴ" /><span>プジョー</span></a></p>
            <p><a href=""><img src="{{asset('img/brands/foreign/citroen.png')}}" alt="メーカー名のロゴ" /><span>シトロエン</span></a></p>
        </div>
    </div>
    <div class="container__searchBody">
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
                $('.container__plans__msContainer').infiniteslide({
                'height': 400, //高さ
                'speed': 10, //速さ
                'direction' : 'left', //向き
                'pauseonhover': true //マウスオーバーでストップ
            });
        });
        })();
    </script>

<!-- header -->
@include('common.footer')