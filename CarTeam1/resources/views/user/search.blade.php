@extends('layouts.layout')
<!-- head -->
@include('common.head')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="{{asset('css/user/search.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
    <div class="col-md-8">
        <form action="/user/search/" method="POST">
            @csrf
            <h3>車名</h3>
            @if(isset( $car_name ))
            <p><input type="text" name="car_name" id="add-input" value="{{ $car_name }}"></p>
            @else
            <p><input type="text" name="car_name" id="add-input" value=""></p>
            @endif
            <h3>価格</h3>
            <p>
                <input type="number" name="min_price" placeholder="Min" class="price-input"> 〜 <input type="number" name="max_price" placeholder="Max" class="price-input">
            </p>
            <h3>年式</h3>
            <p>
                <input type="number" name="min_nensk" placeholder="Min" class="price-input"> 〜 <input type="number" name="max_nensk" placeholder="Max" class="price-input">
            </p>
            <h3>走行距離</h3>
            <p>
                <input type="number" name="min_soukm" placeholder="Min" class="price-input"> 〜 <input type="number" name="max_soukm" placeholder="Max" class="price-input">
            </p>
            <input type="radio" name="sort" value="price-asc">価格の高い順
            <input type="radio" name="sort" value="price-desc">価格の低い順
            <input type="submit" name="send" class="btn btn-primary" value="検索">
        </form>
    </div>

    @isset($cars)
    @if($cars->isEmpty())
    <p id="not-found">商品が見つかりません</p>
    @else
    @foreach($cars as $car)
    <div class="d-flex mb-2" id="car-one">
        <div class="item-left" id="car-img">
            <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" width="300px">
        </div>
        <div class="item-right">
            <div class="d-flex">
                <div class="column">
                    <p class="car-maker">{{ $car['MKRNM'] }}</p>
                    <p class="car-name">{{ $car['CARNM'] }}</p>
                </div>
                <div>
                    <p>{{ $car['STRDT'] }}</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="column">
                    <p>販売価格</p>
                    <p id="prise">{{ number_format($car['STRPR'] * 1000) }}</p>
                </div>
                <div class="column">
                    <p>年式</p>
                    <p>{{ substr($car['NENSK'],0,2) }}年{{ substr($car['NENSK'],2,2) }}月</p>
                </div>
                <div class="column">
                    <p>走行距離</p>
                    <p>{{ number_format($car['SOUKM']) }}km</p>
                </div>
                <div class="column">
                    <p>排気量</p>
                    <p>{{ number_format($car['HIKRY']) }}cc</p>
                </div>
                <div class="column">
                    <p>修復歴</p>
                    @if(!$car['SYURK'])
                    <p>なし</p>
                    @else
                    <p>{{ $car['SYURK'] }}回</p>
                    @endif
                </div>
                <div class="column">
                    <p>ミッション</p>
                    <p>{{ $car['MISYN'] }}</p>
                </div>
            </div>
            <a id="" href="">詳細ページへ</a>
            @isset($favorites)
            @if($favorites->isEmpty())
            <button type="button" data-toggle="modal" data-target="#{{ $car['CARNO'] }}" data-carno="{{ $car['CARNM'] }}" data-fav="0"><img src="{{ asset('img/layout/unfavorite.png') }}" width="25px"> お気に入り登録</button>
            @else
            <?php $cnt = 0; ?>
            @foreach($favorites as $favorite)
            @if($car['CARNO'] == $favorite['CARNO'])
            <button type="button" data-toggle="modal" data-target="#{{ $car['CARNO'] }}" data-carno="{{ $car['CARNM'] }}" data-fav="1"><img src="{{ asset('img/layout/favorite.png') }}" width="25px"> お気に入り解除</button>
            <?php $cnt++; ?>
            @endif
            @endforeach
            @if($cnt == 0)
            <button type="button" data-toggle="modal" data-target="#{{ $car['CARNO'] }}" data-carno="{{ $car['CARNM'] }}" data-fav="0"><img src="{{ asset('img/layout/unfavorite.png') }}" width="25px"> お気に入り登録</button>
            @endif
            @endif
            @else
            @endif
            <div class="modal fade" id="{{ $car['CARNO'] }}" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="carno"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            <form method="POST" action="/user/favorites/{{ $car['CARNO'] }}">
                                @csrf
                                <input type="submit" class="btn btn-primary fav">
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
                    jQuery('#{{ $car['
                        CARNO '] }}').on('show.bs.modal', function(event) {
                        // ボタンを取得
                        var button = $(event.relatedTarget)
                        // data-***の部分を取得
                        var carno = button.data('carno')
                        var fav = button.data('fav')
                        var modal = $(this)
                        if (fav === 0) {
                            modal.find('.modal-title').text('お気に入り登録')
                            modal.find('.modal-footer input').val('登録')
                            modal.find('.carno').text(carno + 'をお気に入り登録しますか？')
                        } else {
                            modal.find('.modal-title').text('お気に入り解除')
                            modal.find('.modal-footer input').val('解除')
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

<!-- header -->
@include('common.footer')