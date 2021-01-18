@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{asset('css/user/auction.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
  <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>

  @isset($cars)
    @if(!$cars->isEmpty())
      @foreach($cars as $car)
        @if($nextDay !== substr($car['STRDT'],0,10))
          <h3 class="title">{{ substr($car['STRDT'],0,10) }} 開催予定</h3>
          <?php $nextDay = substr($car['STRDT'],0,10); ?>
        @else
        @endif
        <div class="cars">
          <div class="d-flex detail">
            <div class="car-item1">
            <?php $filename = 'img/cars/' . $car['CARNO'] . '_1.jpg'; ?>
                @if(file_exists($filename))
                    <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" alt="メーカー名:車種名" width="300px" class="fav-img"/>
                @else
                    <img src="{{ asset('img/cars/car.png') }}" alt="メーカー名:車種名" width="220px" class="null-img"/>
                @endif
            </div>
            <div class="car-item2">
              <div class="d-flex justify-content-between ">
                <div class="car-name">
                  <h5>{{ $car['MKRNM'] }}</h5>
                  <h3>{{ $car['CARNM'] }}</h3>
                </div>
                <h3>開催時刻：{{ substr($car['STRDT'],10,6) }}</h3>
              </div>
              <div class="d-flex justify-content-between">
                <div class="column">
                    <p class="car-title1">オークション開始価格</p>
                    <p class="price">{{ isset($car['STRPR']) ? number_format($car['STRPR'] * 1000):'未登録' }}</p>
                </div>
                <div class="column">
                    <p class="car-title2">年式</p>
                    <p>{{ substr($car['NENSK'],0,2) }}年{{ substr($car['NENSK'],2,2) }}月</p>
                </div>
                <div class="column">
                    <p class="car-title2">走行距離</p>
                    <p>{{ number_format($car['SOUKM']) }}km</p>
                </div>
                <div class="column">
                    <p class="car-title2">排気量</p>
                    <p>{{ number_format($car['HIKRY']) }}cc</p>
                </div>
                <div class="column">
                    <p class="car-title2">修復歴</p>
                    @if(!$car['SYURK'])
                    <p>なし</p>
                    @else
                  <p>あり</p>
                    @endif
                </div>
                <div class="column">
                    <p class="car-title">ミッション</p>
                    <p>{{ $car['MISYN'] }}</p>
                </div>
              </div>
              @if($car['STATS'] == 2)
              <p class="car-end">終了</p>
              @else
              <a href="/user/cars/{{ $car['CARNO'] }}" class="btn detail-button car" style="width: 13rem;">車両詳細</a>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    @else
    @endif
  @endif

  <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>
</div>
@endsection

<!-- header -->
@include('common.footer')