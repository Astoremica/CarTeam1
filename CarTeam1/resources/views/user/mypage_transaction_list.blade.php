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
          <a href="#" class="btn btn-primary button01">プロフィール編集</a>
        </div>
      </div>
      <a href="/user/mypage" class="btn button" style="width: 18rem;">マイページTOP</a>
      <a href="/user/mypage/notification_list" class="btn button" style="width: 18rem;">通知一覧</a>
      <a href="/user/mypage/favorite_list" class="btn button" style="width: 18rem;">お気に入り一覧</a>
      <a href="/user/mypage/transaction_list" class="btn button" style="width: 18rem;">取引一覧</a>
      <a href="#" class="btn button" style="width: 18rem;">個人情報変更</a>
    </div>

    <div class="item-right">
      <h3 class="title"><img src="{{ asset('img/cars/title-car.png') }}" width="32px" class="title-img">現在取引車両一覧</h3>
      @isset($cars)
        @if($cars->isEmpty())
          <p class="null">これまでに取引した車両はありません。</p>
        @else
          @foreach($cars as $car)
            @foreach($transactions as $transaction)
            @if($car['CARNO'] == $transaction['CARNO'])
              @if($transaction['k_status'] == 0 || $transaction['n_status'] == 0)
              <div class="cars">
                <div class="d-flex">
                  <?php
                    $str="";
                    for($i=0;$i<8;$i++){
                      $str.=mt_rand(0,9);
                    }
                  ?>
                  <h4 class="car-title1">取引ID：{{ $str }}</h4>
                  <h4 class="car-title2">落札日：{{ date('Y年n月j日',  strtotime($car['STRDT'])) }}</h4>
                  <h4 class="car-title3">落札金額：{{ number_format($transaction['price'] * 1000) }}円</h4>
                </div>
                <div class="d-flex detail">
                  <div class="car-item1">
                    <?php $filename = 'img/cars/' . $car['CARNO'] . '_1.jpg'; ?>
                    @if(file_exists($filename))
                        <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" alt="メーカー名:車種名" width="180px" class="fav-img"/>
                    @else
                        <img src="{{ asset('img/cars/car.png') }}" alt="メーカー名:車種名" width="155px" class="null-img"/>
                    @endif
                  </div>
                  <div class="car-item2">
                    <h3>{{ $car['CARNM'] }}</h3>
                    @if ($transaction['k_status'] == 0)
                    <h4>取引ステータス：<span style="color: red;font-weight: bold">入金待ち</span></h4>
                    @else
                      <h4>取引ステータス：納車待ち</h4>
                    @endif
                  </div>
                  <div class="car-item3">
                    <a href="/user/cars/{{ $car['CARNO'] }}" class="btn detail-button" style="width: 13rem;">車両詳細</a>
                  </div>
                </div>
              </div>
              @else
              @endif
            @endif
            @endforeach
          @endforeach
        @endif
      @endif

      <h3 class="title"><img src="{{ asset('img/cars/title-car.png') }}" width="32px" class="title-img">取引終了車両一覧</h3>
      @isset($cars)
        @if($cars->isEmpty())
          <p class="null">これまでに取引した車両はありません。</p>
        @else
          @foreach($cars as $car)
            @foreach($transactions as $transaction)
            @if($car['CARNO'] == $transaction['CARNO'])
              @if($transaction['k_status'] == 1 && $transaction['n_status'] == 1)
              <div class="cars">
                <div class="d-flex">
                  <?php
                    $str="";
                    for($i=0;$i<8;$i++){
                        $str.=mt_rand(0,9);
                    }
                  ?>
                  <h4 class="car-title1">取引ID：{{ $str }}</h4>
                  <h4 class="car-title2">落札日：{{ $car['STRDT'] }}</h4>
                  <h4 class="car-title3">落札金額：{{ number_format($transaction['price'] * 1000) }}円</h4>
                </div>
                <div class="d-flex detail">
                  <div class="car-item1">
                    <?php $filename = 'img/cars/' . $car['CARNO'] . '_1.jpg'; ?>
                    @if(file_exists($filename))
                        <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" alt="メーカー名:車種名" width="180px" class="fav-img"/>
                    @else
                        <img src="{{ asset('img/cars/car.png') }}" alt="メーカー名:車種名" width="155px" class="null-img"/>
                    @endif
                  </div>
                  <div class="car-item2">
                    <h3>{{ $car['CARNM'] }}</h3>
                    <h4>取引ステータス：取引終了</h4>
                  </div>
                  <div class="car-item3">
                    <a href="/user/cars/{{ $car['CARNO'] }}" class="btn detail-button" style="width: 13rem;">車両詳細</a>
                  </div>
                </div>
              </div>
              @else
              @endif
            @endif
            @endforeach
          @endforeach
        @endif
      @endif

      <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>
    </div>
  </div>
</div>
@endsection

<!-- header -->
@include('common.footer')