@extends('layouts.layout')
<!-- head -->
@include('common.head')

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
                @if(!$car['MISYN'])
                  <p>AT</p>
                @else
                  <p>MT</p>
                @endif
              </div>
            </div>
            <a id="" href="">詳細ページへ</a>
          </div>
        </div>
        @endforeach
      @endif
    @else
    @endif
    <p>

  </div>
</div>
@endsection

<!-- header -->
@include('common.footer')