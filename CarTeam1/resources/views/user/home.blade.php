@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{asset('css/user/homeStyle.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
    <form action="/user/search/home" method="get" class="container__searchForm">
        <div class="container__searchForm__box">
            <input type="text" name="car_name" placeholder="車名でさがす">
            <button type="submit" class="container__searchForm_searchButton"><img src="{{asset('img/layout/search.png')}}" alt="検索"></button>
        </div>
    </form>
    <hr>
    <div class="container__plans">
        <h2 class="container__plans__header"><img src="{{asset('img/layout/calendar.png')}}" alt="カレンダー">近日開催予定</h2>
        <div class="container__plans__msContainer">
            <ul class="container__plans__msContainer__msItemWrapper">

                @foreach($cars as $car)

                @if($car['STRDT'] <= $nowDate)
                <li class="container__plans__msContainer__msItemWrapper__car end">
                @else
                <li class="container__plans__msContainer__msItemWrapper__car">
                    <a href="/user/cars/{{ $car['CARNO'] }}">
                @endif
                    <!-- display:block -->
                        <?php $filename = 'img/cars/' . $car['CARNO'] . '_1.jpg'; ?>
                        @if(file_exists($filename))
                            <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" alt="メーカー名:車種名" />
                        @else
                            <img src="{{ asset('img/cars/car.png') }}" alt="メーカー名:車種名" />
                        @endif
                        <p class="brandName">{{ $car['MARNM'] }}</p>
                        <p class="carName">{{ $car['CARNM'] }}</p>
                        <p class="startTime">開始：{{ date('Y年n月j日 H:i',  strtotime($car['STRDT'])) }}</p>
                @if($car['STRDT'] > $nowDate)
                    </a>
                @else
                @endif
                </li>

                @endforeach
            </ul>

        </div>
        <p class="container__plans__auctionList">
            <a href="/user/auction/list">開催予定一覧へ</a>
        </p>
    </div>
    <hr>
    <div class="container__searchBrand">
        <h2>メーカーから探す</h2>
        <div class="container__searchBrand__domestic">
            <p>国産<a href="">すべて見る</a></p>
            <p><a href="/user/search/maker_name/レクサス"><img src="{{asset('img/brands/domestic/lexus.png')}}" alt="メーカー名のロゴ" /><span>レクサス</span></a></p>
            <p><a href="/user/search/maker_name/トヨタ"><img src="{{asset('img/brands/domestic/toyota.png')}}" alt="メーカー名のロゴ" /><span>トヨタ</span></a></p>
            <p><a href="/user/search/maker_name/マツダ"><img src="{{asset('img/brands/domestic/mazda.png')}}" alt="メーカー名のロゴ" /><span>マツダ</span></a></p>
            <p><a href="/user/search/maker_name/ダイハツ"><img src="{{asset('img/brands/domestic/daihatsu.png')}}" alt="メーカー名のロゴ" /><span>ダイハツ</span></a></p>
            <p><a href="/user/search/maker_name/スバル"><img src="{{asset('img/brands/domestic/subaru.png')}}" alt="メーカー名のロゴ" /><span>スバル</span></a></p>
            <p><a href="/user/search/maker_name/ホンダ"><img src="{{asset('img/brands/domestic/honda.png')}}" alt="メーカー名のロゴ" /><span>ホンダ</span></a></p>
            <p><a href="/user/search/maker_name/三菱"><img src="{{asset('img/brands/domestic/mitsubishi.png')}}" alt="メーカー名のロゴ" /><span>三菱</span></a></p>
            <p><a href="/user/search/maker_name/スズキ"><img src="{{asset('img/brands/domestic/suzuki.png')}}" alt="メーカー名のロゴ" /><span>スズキ</span></a></p>
            <p><a href="/user/search/maker_name/日産"><img src="{{asset('img/brands/domestic/nissan.png')}}" alt="メーカー名のロゴ" /><span>日産</span></a></p>
        </div>
        <div class="container__searchBrand__foreign">
            <p>輸入<a href="">すべて見る</a></p>
            <p><a href="/user/search/maker_name/ルセデス・ベンツ"><img src="{{asset('img/brands/foreign/mercedes-benz.png')}}" alt="メーカー名のロゴ" /><span>メルセデス・ベンツ</span></a></p>
            <p><a href="/user/search/maker_name/BMW"><img src="{{asset('img/brands/foreign/bmw.png')}}" alt="メーカー名のロゴ" /><span>BMW</span></a></p>
            <p><a href="/user/search/maker_name/フォルクスワーゲン"><img src="{{asset('img/brands/foreign/volks.png')}}" alt="メーカー名のロゴ" /><span>フォルクスワーゲン</span></a></p>
            <p><a href="/user/search/maker_name/アウディ"><img src="{{asset('img/brands/foreign/audi.png')}}" alt="メーカー名のロゴ" /><span>アウディ</span></a></p>
            <p><a href="/user/search/maker_name/ミニ"><img src="{{asset('img/brands/foreign/mini.png')}}" alt="メーカー名のロゴ" /><span>ミニ</span></a></p>
            <p><a href="/user/search/maker_name/ポルシェ"><img src="{{asset('img/brands/foreign/porsche.png')}}" alt="メーカー名のロゴ" /><span>ポルシェ</span></a></p>
            <p><a href="/user/search/maker_name/ボルボ"><img src="{{asset('img/brands/foreign/volvo.png')}}" alt="メーカー名のロゴ" /><span>ボルボ</span></a></p>
            <p><a href="/user/search/maker_name/ブジョー"><img src="{{asset('img/brands/foreign/peugeot.png')}}" alt="メーカー名のロゴ" /><span>プジョー</span></a></p>
            <p><a href="/user/search/maker_name/シトロエン"><img src="{{asset('img/brands/foreign/citroen.png')}}" alt="メーカー名のロゴ" /><span>シトロエン</span></a></p>
        </div>
    </div>
    <div class="container__searchBody">
        <h2>ボディータイプから探す</h2>
        <div class="container__searchBody__list">
            <p><a href="/user/search/body_type/軽自動車"><img src="{{asset('img/bodytypes/1.png')}}" /><span>軽自動車</span></a></p>
            <p><a href="/user/search/body_type/SUV・クロカン"><img src="{{asset('img/bodytypes/2.png')}}" alt="" /><span>SUV・クロカン</span></a></p>
            <p><a href="/user/search/body_type/ステーションワゴン"><img src="{{asset('img/bodytypes/3.png')}}" alt="" /><span>ステーションワゴン</span></a></p>
            <p><a href="/user/search/body_type/セダン"><img src="{{asset('img/bodytypes/4.png')}}" alt="" /><span>セダン</span></a></p>
            <p><a href="/user/search/body_type/クーペ"><img src="{{asset('img/bodytypes/5.png')}}" alt="" /><span>クーペ</span></a></p>
            <p><a href="/user/search/body_type/オープンカー"><img src="{{asset('img/bodytypes/6.png')}}" alt="" /><span>オープンカー</span></a></p>
            <p><a href="/user/search/body_type/ハッチパック"><img src="{{asset('img/bodytypes/7.png')}}" alt="" /><span>ハッチパック</span></a></p>
            <p><a href="/user/search/body_type/ヒップアップトラック"><img src="{{asset('img/bodytypes/9.png')}}" alt="" /><span>ピックアップトラック</span></a></p>
            <p><a href="/user/search/body_type/ミニバン・ワゴン"><img src="{{asset('img/bodytypes/10.png')}}" alt="" /><span>ミニバン・ワゴン</span></a></p>
            <p><a href="/user/search/body_type/トラック・その他"><img src="{{asset('img/bodytypes/8.png')}}" alt="" /><span>トラック・その他</span></a></p>
        </div>
    </div>
</div>
@endsection
<script type="module" src="{{ asset('js/infiniteslide.js') }}"></script>
<script type="module" src="{{ asset('js/jquery.pause.min.js') }}"></script>
<script type="module">
    (function() {
        $(window).on('load', function() {
            $('.container__plans__msContainer').infiniteslide({
                'height': 400, //高さ
                'speed': 10, //速さ
                'direction': 'left', //向き
                'pauseonhover': true //マウスオーバーでストップ
            });
        });
    })();
</script>

<!-- header -->
@include('common.footer')