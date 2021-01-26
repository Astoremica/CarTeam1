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
      <h3 class="title">通知一覧</h3>
      <div class="notifications">
        @foreach ($transactions as $transaction)
        <div class="d-flex items">
          <p><span class="genre">入金</a></p>
          <div class="detail">
            <p class="n-title">入金待ちの車両：{{ $transaction['MKRNM'] }} {{ $transaction['CARNM'] }}　期限：{{ date('Y年n月j日', strtotime($transaction['end_date'] . '+1 month last day of')) }}</p>
            <div class="d-flex n-contents">
              <div class="n-img">
                <?php $filename = 'img/cars/' . $transaction['CARNO'] . '_1.jpg'; ?>
                @if(file_exists($filename))
                  <img src="{{ asset('img/cars/' . $transaction['CARNO'] . '_1.jpg') }}" alt="メーカー名:車種名" width="100px" class="n-nullimg"/>
                @else
                <img src="{{ asset('img/cars/car.png') }}" alt="メーカー名:車種名" width="100px" class="n-nullimg"/>
                @endif
              </div>
              <div class="n-content">
                <p>あなたが{{ date('Y年n月j日',  strtotime($transaction['end_date'])) }}に落札された{{ $transaction['CARNM'] }}の入金期限が迫っています。</p>
                <p class="n-pad">入金期限は{{ date('Y年n月j日', strtotime($transaction['end_date'] . '+1 month last day of')) }}となっております。忘れずご入金ください。</p>
                <a href="/user/cars/{{ $transaction['CARNO'] }}" class="btn n-detail-button" style="width: 1rem;">車両詳細</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach 
      </div>
      <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>
    </div>
  </div>
</div>
@endsection

<!-- header -->
@include('common.footer')