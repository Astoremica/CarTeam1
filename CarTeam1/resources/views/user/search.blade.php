@extends('layouts.layout')
<!-- head -->
@include('common.head')

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="" method="POST">
        @csrf
        <h3>車名</h3>
        <p><input type="text" name="car_name" id="add-input"></p>
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
      <ul class="search_flex">
        @foreach($cars as $car)
        <div class="search_item">
          <p>{{ $car['CARNO'] }}</p>
          <p>{{ $car['MKRNM'] }}</p>
          <p>{{ $car['CARNM'] }}</p>
          <p>{{ $car['NENSK'] }}</p>
          <p>{{ $car['SOUKM'] }}</p>
          <p>{{ $car['STRDT'] }}</p>
        </div>
        @endforeach
      </ul>
      @endif
    @else
      <p>aaa</p>
    @endif
    <p>

  </div>
</div>
@endsection

<!-- header -->
@include('common.footer')