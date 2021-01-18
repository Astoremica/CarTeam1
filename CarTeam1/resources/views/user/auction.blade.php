@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{asset('css/user/auction.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">

  <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>

  <div class="d-flex">
    <div class="item-left">
      <?php $filename = 'img/cars/' . $car['CARNO'] . '_1.jpg'; ?>
      @if(file_exists($filename))
          <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" alt="メーカー名:車種名" width="500px" />
      @else
          <img src="{{ asset('img/cars/car.png') }}" alt="メーカー名:車種名" width="500px" />
      @endif
    </div>
    <div class="item-right">
      <div class="d-flex justify-content-between">
        <div class="column1-left">
          <h5>{{ $car->MKRNM }}</h5>
          <h2>{{ $car->CARNM }} {{ $car->GRADE }}</h2>
        </div>
        <div class="column1-right">
          <h4>残り時間</h4>
          <h2>7分23秒</h2>
        </div>
      </div>

      <div class="d-flex column2 justify-content-between">
        <div class="column2-left">
          <h5>現在入札金額</h5>
          <h1>3,000,000</h1>
        </div>
        <div class="column2-right">
          <h5>入札数</h5>
          <h1>10</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex column3 justify-content-between">
    <div class="item2-left">
      <div class="d-flex">
        <div class="column3-left">
          <div class="d-flex">
            <div class="column-some">
              <p>年式</p>
              <p class="display">{{ substr($car->NENSK,0,2) }}年<br>{{ substr($car->NENSK,2,2) }}月</p>
            </div>
            <div class="column-some">
              <p>走行距離</p>
              <p class="display">{{ number_format($car->SOUKM) }}km</p>
            </div>
            <div class="column-some">
              <p>車検期限</p>
              <p class="display">{{ substr($car->KENKG, 0, 4) }}年<br>{{ substr($car->KENKG, 4, 2) }}月{{ substr($car->KENKG, 6, 2) }}日</p>
            </div>
            <div class="column-some">
              <p>修復歴</p>
              @if(!$car->SYURK)
                <p class="display">無し</p>
              @else
                <p class="display">有り</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item2-right">
      <div class="column3-right">
        <h5>入札金額入力</h5>
        <form action="" method="">
          <input type="text" name=""><span class="zero">,000</span>
          <input type="submit" name="" class="button01" value="入札">
        </form>
      </div>
    </div>
  </div>

  <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>

</div>
@endsection

<!-- header -->
@include('common.footer')