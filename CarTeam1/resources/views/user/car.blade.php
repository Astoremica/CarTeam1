@extends('layouts.layout')
<!-- head -->
@include('common.head')

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
  @isset($car)
  <div class="d-flex">
    <div class="item-left">
      <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" width="550px">
      <div class="d-flex">
        @for($i = 1 ; $i <= $car['IMGSU'] ; $i++)
          <img src="{{ asset('img/cars/' . $car['CARNO'] . '_' . $i . '.jpg') }}" width="100px">
        @endfor
      </div>
    </div>
    <div class="item-right">
      <div class="column">
        <p>開催日時</p>
        <p>{{ $car['STRDT'] }} 〜</p>
      </div>
      <div class="column">
        <p>オークション開始価格</p>
        <p>{{ number_format($car['STRPR'] * 1000) }}円</p>
      </div>
      <div class="d-flex">
        <div class="column">
          <p>年式</p>
          <p>{{ substr($car['NENSK'],0,2) }}年{{ substr($car['NENSK'],2,2) }}月</p>
        </div>
        <div class="column">
          <p>走行距離</p>
          <p>{{ number_format($car['SOUKM']) }}km</p>
        </div>
        <div class="column">
          <p>車検期限</p>
          <p>{{ substr($car['KENKG'], 0, 4) }}年{{ substr($car['KENKG'], 4, 2) }}月{{ substr($car['KENKG'], 6, 2) }}日</p>
        </div>
        <div class="column">
          <p>修復歴</p>
          @if(!$car['SYURK'])
            <p>なし</p>
          @else
            <p>{{ $car['SYURK'] }}回</p>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div>
    <p>車両情報</p>
    <table class="table table-bordered">
      <thead class="thead-lignt">
        <tr>
          <td class="table-active" style="width:13%">グレード</td><td style="width:20%">{{ $car['GRADE'] }}</td>
          <td class="table-active" style="width:13%">シフト</td><td style="width:20%">{{ $car['SFTNB'] }}</td>
          <td class="table-active" style="width:13%">燃料</td><td style="width:20%">{{ $car['NENRY'] }}</td>
        </tr>
        <tr>
          <td class="table-active" style="width:13%">乗員数</td><td style="width:20%">{{ $car['TEIIN'] }}</td>
          <td class="table-active" style="width:13%">排気量</td><td style="width:20%">{{ $car['HIKRY'] }}</td>
          <td class="table-active" style="width:13%">色</td><td style="width:20%">{{ $car['COLOR'] }}</td>
        </tr>
        <tr>
          <td class="table-active" style="width:13%">型式</td><td style="width:20%">{{ $car['KATSK'] }}</td>
          <td class="table-active" style="width:13%">車検</td><td style="width:20%">{{ $car['KENKG'] }}</td>
          <td class="table-active" style="width:13%">走行距離</td style="width:20%"><td>{{ $car['SOUKM'] }}</td>
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

  <div>
    <p>展開図・特記事項</p>
    <div class="d-flex">
      <div class="item-left">
        <div class="card" style="width: 340px; border-radius:20px; padding: 10px 0 10px 15px;">
          <img src="{{ asset('img/layout/car_development_view.png') }}" width="300px">
        </div>
      </div>
      <div class="item-right">
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
        <div class="d-flex">
          <div class="column">
            <h4>A</h4>
            <p>キズ</p>
          </div>
          <div class="column">
            <h4>U</h4>
            <p>凹</p>
          </div>
          <div class="column">
            <h4>W</h4>
            <p>補修波</p>
          </div>
          <div class="column">
            <h4>X</h4>
            <p>要交換</p>
          </div>
          <div class="column">
            <h4>XX</h4>
            <p>交換済み</p>
          </div>
          <div class="column">
            <h4>P</h4>
            <p>要塗装</p>
          </div>
          <div class="column">
            <h4>S</h4>
            <p>錆</p>
          </div>
          <div class="column">
            <h4>C</h4>
            <p>腐食</p>
          </div>
          <div class="column">
            <h4>B</h4>
            <p>傷凹</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endif
</div>
@endsection

<!-- header -->
@include('common.footer')