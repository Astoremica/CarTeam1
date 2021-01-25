@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{asset('css/layout/car.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">

  <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>

  @isset($car)
  <h3 class="column-title1"><span class="maker">{{ $car['MKRNM'] }}</span> {{ $car['CARNM'] }}</h3>
  <div class="d-flex">
    <div class="item-left">
      <?php $filename = 'img/cars/' . $car['CARNO'] . '_1.jpg'; ?>
      @if(file_exists($filename))
        <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" width="565px" class="main-img">
      @else
        <img src="{{ asset('img/cars/car.png') }}" width="500px" class="main-img">
      @endif
      <div class="d-flex">
        @if($car['IMGSU'] !== 1)
          @for($i = 1 ; $i < $car['IMGSU'] ; $i++)
            <img src="{{ asset('img/cars/' . $car['CARNO'] . '_' . $i . '.jpg') }}" width="90px" class="sub-img">
          @endfor
        @endif
      </div>
    </div>
    <div class="item-right">
      @if(strtotime($car['STRDT']) > strtotime('2000/1/1'))
      <div class="column-date">
        <h6>開催日時</h6>
        @if((date('Y/m/d H:i') > $car['STRDT']))
        <h2>終了</h2>
        @else
        <h2>{{ $car['STRDT'] }} 〜</h2>
        @endif
      </div>
      <?php $cnt = 0; ?>
      @foreach($transactions as $transaction)
        @if($car['CARNO'] == $transaction['CARNO'])
        <div class="column-price">
          <h6>オークション終了価格</h6>
          <h2>{{ number_format($transaction['price'] * 1000) }}<span class="price">円</span></h2>
        </div>
          <?php $cnt++; ?>
          @break
        @endif
      @endforeach
      @if($cnt == 0)
      <div class="column-price">
        <h6>オークション開始価格</h6>
        <h2>{{ number_format($car['STRPR'] * 1000) }}<span class="price">円</span></h2>
      </div>
      @endif
      @if((date('Y/m/d H:i') == $car['STRDT']))
      <div class="column-auction">

        <h6>オークション会場へ</h6>
        <a href="/user/auction/{{ $car['CARNO'] }}" class="btn auction-button"><h4>入場する</h4></a>
      </div>
      @elseif(date('Y/m/d H:i') < $car['STRDT'])
      <div class="column-auction">
        <h6>オークション会場へ</h6>
        <p class="car-end">まだ入場できません</p>
      </div>
      @else
      @endif
      @else
      <div class="column-date">
        <h6>開催日時</h6>
        <h2>未定</h2>
      </div>
      <div class="column-price">
        <h6>オークション開始価格</h6>
        <h2>未登録</h2>
      </div>
      @endif
      <div class="d-flex">
        <div class="column-some">
          <p><u>年式</u></p>
          <p class="display">{{ substr($car['NENSK'],0,2) }}年<br>{{ substr($car['NENSK'],2,2) }}月</p>
        </div>
        <div class="column-some">
          <p><u>走行距離</u></p>
          <p class="display">{{ number_format($car['SOUKM']) }}<br>km</p>
        </div>
        <div class="column-some">
          <p><u>車検期限</u></p>
          <p class="display">{{ substr($car['KENKG'], 0, 4) }}年<br>{{ substr($car['KENKG'], 4, 2) }}月{{ substr($car['KENKG'], 6, 2) }}日</p>
        </div>
        <div class="column-some">
          <p><u>修復歴</u></p>
          @if(!$car['SYURK'])
            <p class="display">無し</p>
          @else
            <p class="display">有り</p>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="car-info">
    <h3 class="column-title">車両情報</h3>
    <table class="table table-bordered">
      <thead class="thead-lignt">
        <tr>
          <td class="table-active" style="width:13%">グレード</td><td style="width:20%">{{ $car['GRADE'] }}</td>
          <td class="table-active" style="width:13%">シフト</td><td style="width:20%">{{ $car['SFTNB'] }}</td>
          <td class="table-active" style="width:13%">燃料</td><td style="width:20%">{{ $car['NENRY'] }}</td>
        </tr>
        <tr>
          <td class="table-active" style="width:13%">乗員数</td><td style="width:20%">{{ $car['TEIIN'] }}人</td>
          <td class="table-active" style="width:13%">排気量</td><td style="width:20%">{{ number_format($car['HIKRY']) }}cc</td>
          <td class="table-active" style="width:13%">色</td><td style="width:20%">{{ $car['COLOR'] }}</td>
        </tr>
        <tr>
          <td class="table-active" style="width:13%">型式</td><td style="width:20%">{{ $car['KATSK'] }}</td>
          <td class="table-active" style="width:13%">車検</td><td style="width:20%">{{ substr($car['KENKG'], 0, 4) }}年{{ substr($car['KENKG'], 4, 2) }}月{{ substr($car['KENKG'], 6, 2) }}日</td>
          <td class="table-active" style="width:13%">走行距離</td style="width:20%"><td>{{ number_format($car['SOUKM']) }}km</td>
        </tr>
        <tr>
          <td class="table-active" style="width:13%">修復歴</td><td style="width:20%">@if($car['SYURK'] == 0)なし @else 有 @endif</td>
          <td class="table-active" style="width:13%">駆動</td><td style="width:20%">{{ $car['KDHSK'] }}</td>
          <td class="table-active" style="width:13%"></td><td style="width:20%"></td>
        </tr>
        <tr>
          <td class="table-active" style="width:13%">装備</td>
          <td colspan="5">
          @foreach($have_options as $have_option)
            {{ $options[$have_option['option']] }}
            @if (!$loop->last)
              ,
            @endif
          @endforeach
          </td>
        </tr>
      </thead>
    </table>
  </div>

  <hr>

  <div>
    <h3 class="column-title">展開図・特記事項</h3>
    <div class="d-flex">
      <div class="item-left">
        <div class="card" style="width: 340px; border-radius:20px; padding: 10px 0 10px 15px;">
          <img src="{{ asset('img/layout/car_development_view.png') }}" width="300px">
        </div>
      </div>
      <div class="damage-item">
        <table class="table" style="text-align:center;">
          <thead>
            <tr>
              <th scope="col" style="width:250px;">箇所番号</th>
              <th scope="col" style="width:250px;">事項内容</th>
            </tr>
          </thead>
          <tbody>
            @foreach($statuses as $status)
            <tr>
              <td style="width:250px;">{{ $status['no'] }}</td>
              <td style="width:250px;">{{ $status['stats'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex damage-list">
          <div class="column-con">
            <h4>A</h4>
            <p class="damage-det">キズ</p>
          </div>
          <div class="column-con">
            <h4>U</h4>
            <p class="damage-det">凹</p>
          </div>
          <div class="column-con">
            <h4>W</h4>
            <p class="damage-det">補修波</p>
          </div>
          <div class="column-con">
            <h4>X</h4>
            <p class="damage-det">要交換</p>
          </div>
          <div class="column-con">
            <h4>XX</h4>
            <p class="damage-det">交換済み</p>
          </div>
          <div class="column-con">
            <h4>P</h4>
            <p class="damage-det">要塗装</p>
          </div>
          <div class="column-con">
            <h4>S</h4>
            <p class="damage-det">錆</p>
          </div>
          <div class="column-con">
            <h4>C</h4>
            <p class="damage-det">腐食</p>
          </div>
          <div class="column-con">
            <h4>B</h4>
            <p class="damage-det">傷凹</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="javascript:history.back()" class="btn return-button">〈 前に戻る</a>
 

  @endif
</div>
@endsection

<!-- header -->
@include('common.footer')