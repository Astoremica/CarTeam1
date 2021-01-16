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
      <img src="{{ asset('img/cars/Z12-123456_1.jpg') }}" width="500px" >
    </div>
    <div class="item-right">
      <div class="d-flex justify-content-between">
        <div class="column1-left">
          <h5>メルセデス・ベンツ</h5>
          <h2>A-Class AMGライン</h2>
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
              <p class="display">2020/11</p>
            </div>
            <div class="column-some">
              <p>走行距離</p>
              <p class="display">3,000km</p>
            </div>
            <div class="column-some">
              <p>車検期限</p>
              <p class="display">2023/11</p>
            </div>
            <div class="column-some">
              <p>修復歴</p>
              <p>なし</p>
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