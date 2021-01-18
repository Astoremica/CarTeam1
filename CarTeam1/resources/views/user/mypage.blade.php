@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{ asset('css/user/mypage.css') }}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
  <div class="d-flex">
    <div class="item-left" style="width: 18rem;">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top img" src="{{ asset('img/layout/human.png') }}">
        <div class="card-body">
          <h5 class="card-title">名前：{{ $user['name1'] }} {{$user['name2'] }}</h5>
          <h5 class="card-subtitle text-muted nickname">ニックネーム：{{ $user['name3'] }}</h5>
          <a href="#" class="btn btn-primary">プロフィール編集</a>
        </div>
      </div>
      <a href="#" class="btn button" style="width: 18rem;">お気に入り一覧</a>
      <a href="#" class="btn button" style="width: 18rem;">取引一覧</a>
      <a href="#" class="btn button" style="width: 18rem;">個人情報変更</a>
    </div>

    <div class="item-right">
      <h3 class="title"><img src="{{ asset('img/cars/title-car.png') }}" width="32px" class="title-img">現在取引中の車両</h3>
      @isset($cars)
        @if(!$cars->isEmpty())
          @foreach($cars as $car)
            @foreach($transactions as $transaction)
            @if($car['CARNO'] == $transaction['CARNO'])
            <div class="cars">
              <div class="d-flex">
                <h4 class="car-title1">取引ID：99999999</h4>
                <h4 class="car-title2">落札日：{{ $car['STRDT'] }}</h4>
                <h4 class="car-title3">落札金額：{{ number_format($transaction['price']) }}円</h4>
              </div>
              <div class="d-flex detail">
                <div class="car-item1">
                  <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" width="180px">
                </div>
                <div class="car-item2">
                  <h3>{{ $car['CARNM'] }}</h3>
                  <h4>取引ステータス：提出書類確認中</h4>
                </div>
                <div class="car-item3">
                  <a href="/user/cars/{{ $car['CARNO'] }}" class="btn detail-button" style="width: 13rem;">車両詳細</a>
                </div>
              </div>
            </div>
            @else
            @endif
            @endforeach
          @endforeach
        @else
        @endif
      @endif

      <h3 class="title"><img src="{{ asset('img/cars/title-car.png') }}" width="32px" class="title-img">お気に入り登録した車両</h3>
      @isset($favorites)
        @if(!$favorites->isEmpty())
          @foreach($favorites as $favorite)
            <div class="cars">
              <div class="d-flex detail">
                <div class="car-item1">
                  <img src="{{ asset('img/cars/' . $favorite['CARNO'] . '_1.jpg') }}" width="180px" class="fav-img">
                </div>
                <div class="car-item2">
                  <h4>{{ $favorite['CARNM'] }}</h4>
                  <div class="d-flex">
                    <div class="column">
                        <p class="p-title">販売価格</p>
                        <p class="price">{{ number_format($favorite['STRPR'] * 1000) }}</p>
                    </div>
                    <div class="column">
                        <p class="fav-title">年式</p>
                        <p>{{ substr($favorite['NENSK'],0,2) }}年{{ substr($favorite['NENSK'],2,2) }}月</p>
                    </div>
                    <div class="column">
                        <p class="fav-title">走行距離</p>
                        <p>{{ number_format($favorite['SOUKM']) }}km</p>
                    </div>
                    <div class="column">
                        <p class="fav-title">排気量</p>
                        <p>{{ number_format($favorite['HIKRY']) }}cc</p>
                    </div>
                    <div class="column">
                        <p class="fav-title">修復歴</p>
                        @if(!$favorite['SYURK'])
                        <p>なし</p>
                        @else
                      <p>あり</p>
                        @endif
                    </div>
                    <div class="column">
                        <p class="fav-title">ミッション</p>
                        <p>{{ $favorite['MISYN'] }}</p>
                    </div>
                  </div>
                  @if($car['URIST'] == 2)
                  <p class="car-end">終了</p>
                  @else
                  <a href="/user/cars/{{ $favorite['CARNO'] }}" class="btn fav-button fav" style="width: 13rem;">車両詳細</a>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        @else
        @endif
      @endif
    </div>
  </div>
</div>
@endsection

<!-- header -->
@include('common.footer')
