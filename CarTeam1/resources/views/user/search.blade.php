@extends('layouts.layout')
<!-- head -->
@include('common.head')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="{{asset('css/user/search.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
    <div class="container_search">
        <h2 class="container_search_h2">車両検索</h2>
        <form action="/user/search/" method="POST">
            @csrf
            <h3>車名で検索</h3>
            @if(isset( $car_name ))
            <input type="text" name="car_name" id="add-input" value="{{ $car_name }}">
            @else
            <input type="text" name="car_name" id="add-input" value="">
            @endif
            <button type="submit" name="send" id="searchButton" value="検索"><img src="{{asset('img/layout/search.png')}}" alt="検索"></button>
            <div class="container_search_count_detail">
                <p class="container_resultCount">検索結果: {{ count($cars) }}件</p>
                <p class="container_search_detailOpen js-accordion-title">詳細検索</p>

            </div>
            <div class="container_searchDetail">
                <h3>価格</h3>
                <p>
                    @if(isset( $min_price ) && isset( $max_price ))
                    <input type="number" name="min_price" placeholder="Min" class="price-input" value="{{ $min_price }}"> 〜 <input type="number" name="max_price" placeholder="Max" class="price-input" value="{{ $max_price }}">&nbsp;円
                    @else
                    <input type="number" name="min_price" placeholder="Min" class="price-input" value=""> 〜 <input type="number" name="max_price" placeholder="Max" class="price-input" value="">&nbsp;円
                    @endif
                </p>
                <h3>年式</h3>
                <p>
                    @if(isset( $min_nensk ) && isset( $max_nensk ))
                    <input type="number" name="min_nensk" placeholder="Min" class="price-input" value="{{ $min_nensk }}"> 〜 <input type="number" name="max_nensk" placeholder="Max" class="price-input" value="{{ $max_nensk }}">&nbsp;年
                    @else
                    <input type="number" name="min_nensk" placeholder="Min" class="price-input" value=""> 〜 <input type="number" name="max_nensk" placeholder="Max" class="price-input" value="">&nbsp;年
                    @endif
                </p>
                <h3>走行距離</h3>
                <p>
                    @if(isset( $min_soukm ) && isset( $max_soukm ))
                    <input type="number" name="min_soukm" placeholder="Min" class="price-input" value="{{ $min_soukm }}"> 〜 <input type="number" name="max_soukm" placeholder="Max" class="price-input" value="{{ $max_soukm }}">&nbsp;km
                    @else
                    <input type="number" name="min_soukm" placeholder="Min" class="price-input" value=""> 〜 <input type="number" name="max_soukm" placeholder="Max" class="price-input" value="">&nbsp;km
                    @endif
                </p>

                <h3>並び替え</h3>
                <div class="sort">
                    <input id="sorthigh" type="radio" name="sort" value="price-asc"><label for="sorthigh" id="sorthighlabel">価格の高い順</label>
                    <input id="sortlower" type="radio" name="sort" value="price-desc"><label for="sortlower">価格の低い順</label>
                </div>
                <div class="container_searchDetail_button">
                    <button type="reset" name="send" class="container_searchDetail_button_reset">リセット</button>
                    <button type="submit" name="send" class="container_searchDetail_button_submit" value="検索">検索</button>
                </div>
            </div>
        </form>
    </div>

    @isset($cars)
    @if($cars->isEmpty())
    <p id="not-found">商品が見つかりません</p>
    @else
    @foreach($cars as $car)
    <div class="car_list" id="car-one">
        <div class="car_img">
            <?php $filename = 'img/cars/' . $car['CARNO'] . '_1.jpg'; ?>
                @if(file_exists($filename))
                    <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" alt="メーカー名:車種名" />
                @else
                    <img src="{{ asset('img/cars/car.png') }}" alt="メーカー名:車種名" class="null-img" width="300px"/>
                @endif
        </div>
        <div class="car_contents">
            <p class="car_maker">{{ $car['MKRNM'] }}</p>
            <p class="car_name">{{ $car['CARNM'] }}</p>
            @if(strtotime($car['STRDT']) > strtotime('2000/1/1'))
            <p class="start_time">開始時間：<span>{{ $car['STRDT'] }}</span></p>
            @else
            <p class="start_time">開始時間：未定</p>
            @endif
            <div class="car_detail">

                <div class="price">
                    <p class="price_title">開始価格</p>
                    <p class="price_price">{{ isset($car['STRPR']) ? number_format($car['STRPR'] * 1000):'未登録' }}</p>
                </div>
                <div class="year">
                    <p>年式</p>
                    <p>{{ substr($car['NENSK'],0,2) }}年{{ substr($car['NENSK'],2,2) }}月</p>
                </div>
                <div class="mileage">
                    <p>走行距離</p>
                    <p>{{ number_format($car['SOUKM']) }}km</p>
                </div>
                <div class="displacement">
                    <p>排気量</p>
                    <p>{{ number_format($car['HIKRY']) }}cc</p>
                </div>
                <div class="repair">
                    <p>修復歴</p>
                    @if(!$car['SYURK'])
                    <p>なし</p>
                    @else
                    <p>あり</p>
                    @endif
                </div>
                <div class="drive_system">
                    <p>ミッション</p>
                    <p>{{ $car['MISYN'] }}</p>
                </div>
            </div>
            <div class="car_button">
                @isset($favorites)
                @if($favorites->isEmpty())
                <button class="favorite_button" type="button" data-toggle="modal" data-target="#{{ $car['CARNO'] }}" data-carno="{{ $car['CARNM'] }}" data-fav="0"><img src="{{ asset('img/layout/unfavorite.png') }}"> お気に入り登録</button>
                @else
                <?php $cnt = 0; ?>
                @foreach($favorites as $favorite)
                @if($car['CARNO'] == $favorite['CARNO'])
                <button class="favorite_button" type="button" data-toggle="modal" data-target="#{{ $car['CARNO'] }}" data-carno="{{ $car['CARNM'] }}" data-fav="1"><img src="{{ asset('img/layout/favorite.png') }}"> お気に入り解除</button>
                <?php $cnt++; ?>
                @endif
                @endforeach
                @if($cnt == 0)
                <button class="favorite_button" type="button" data-toggle="modal" data-target="#{{ $car['CARNO'] }}" data-carno="{{ $car['CARNM'] }}" data-fav="0"><img src="{{ asset('img/layout/unfavorite.png') }}"> お気に入り登録</button>
                @endif
                @endif
                @else
                @endif

                <button class="link_detail_button">
                    <a href="/user/cars/{{ $car['CARNO'] }}"><img src="{{asset('img/layout/link_detail.png')}}">詳細ページへ</a>
                </button>
            </div>

            <div class="modal fade" id="{{ $car['CARNO'] }}" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h5 class="modal-title column-title"></h5>
                            <p class="carno"></p>
                            <div class="d-flex flex-row-reverse">
                                <form method="POST" action="/user/favorites/{{ $car['CARNO'] }}">
                                    @csrf
                                <input type="submit" class="btn btn-primary fav">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            </div>
                        </div>
                        @csrf
                        @if(isset( $car_name ))
                        <input type="hidden" name="car_name" id="add-input" value="{{ $car_name }}">
                        @endif
                        @if(isset( $sort ))
                        <input type="hidden" name="sort" id="add-input" value="{{ $sort }}">
                        @endif
                        @if(isset( $min_price ) && isset( $max_price ))
                        <input type="hidden" name="min_price" id="add-input" value="{{ $min_price }}">
                        <input type="hidden" name="max_price" id="add-input" value="{{ $max_price }}">
                        @endif
                        @if(isset( $min_nensk ) && isset( $max_nensk ))
                        <input type="hidden" name="min_nensk" id="add-input" value="{{ $min_nensk }}">
                        <input type="hidden" name="max_nensk" id="add-input" value="{{ $max_nensk }}">
                        @endif
                        @if(isset( $min_soukm ) && isset( $max_soukm ))
                        <input type="hidden" name="min_soukm" id="add-input" value="{{ $min_soukm }}">
                        <input type="hidden" name="max_soukm" id="add-input" value="{{ $max_soukm }}">
                        @endif
                        </form>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                jQuery(function() {
                    jQuery('#{{ $car['CARNO'] }}').on('show.bs.modal', function(event) {
                        // ボタンを取得
                        var button = $(event.relatedTarget)
                        // data-***の部分を取得
                        var carno = button.data('carno')
                        var fav = button.data('fav')
                        var modal = $(this)
                        if (fav === 0) {
                            modal.find('.column-title').text('お気に入り登録')
                            modal.find('.modal-body input').val('登録')
                            modal.find('.carno').text(carno + 'をお気に入り登録しますか？')
                        } else {
                            modal.find('.modal-title').text('お気に入り解除')
                            modal.find('.modal-body input').val('解除')
                            modal.find('.carno').text(carno + 'をお気に入り解除しますか？')
                        }
                    })
                })
            </script>
        </div>
    </div>
    @endforeach
    @endif
    @else
    @endif
</div>
</div>
@endsection
<script type="module">
    (function() {
        $('.js-accordion-title').on('click', function() {
            /*クリックでコンテンツを開閉*/
            $('.container_searchDetail').slideToggle(200);
            /*矢印の向きを変更*/
            $(this).toggleClass('open', 200);
        });
    })();
</script>
<!-- header -->
@include('common.footer')