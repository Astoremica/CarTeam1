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
        <p><input type="text" name="car_name" id="add-input" value="{{ $car_name }}"></p>
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
        <div class="d-flex mb-2">
          <div class="item-left">
            <img src="{{ asset('img/cars/' . $car['CARNO'] . '_1.jpg') }}" width="300px">
          </div>
          <div class="item-right">
            <div class="d-flex">
              <div class="column">
                <p>{{ $car['MKRNM'] }}</p>
                <p>{{ $car['CARNM'] }}</p>
              </div>
              <div>
                <p>{{ $car['STRDT'] }}</p>
              </div>
            </div>
            <div class="d-flex">
              <div class="column">
                <p>販売価格</p>
                <p>{{ number_format($car['STRPR'] * 1000) }}</p>
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
                <p>{{ $car['MISYN'] }}</p>
              </div>
            </div>
            <a id="" href="">詳細ページへ</a>
            @isset($favorites)
              @if($favorites->isEmpty())
                <button type="button" class="btn" data-toggle="modal" data-target="#modal1"><img src="{{ asset('img/layout/unfavorite.png') }}" width="25px"> お気に入り登録</button>
              @else
                @foreach($favorites as $favorite)
                  @if($car['CARNO'] == $favorite['CARNO'])
                    <button type="button" data-toggle="modal" data-target="#modal2" data-carno="{{ $car['CARNO'] }}"><img src="{{ asset('img/layout/favorite.png') }}" width="25px"> お気に入り解除</button>
                  @else
                    <button type="button" data-toggle="modal" data-target="#modal1"><img src="{{ asset('img/layout/unfavorite.png') }}" width="25px"> お気に入り登録</button>
                  @endif
                @endforeach
              @endif
            @else
            @endif
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="label1">お気に入り登録</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">OK</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="label1">お気に入り解除</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">OK</button>
                  </div>
                </div>
              </div>
            </div>

            <script type="text/javascript">
              $('#modal2').on('show.bs.modal', function (event) {
                // ボタンを取得
                var button = $(event.relatedTarget);
                // data-***の部分を取得
                var sampledata = button.data('carno');
                console.log(sampledata);
                var modal = $(this);
                // モーダルに取得したパラメータを表示
                // 以下ではh5のモーダルタイトルのクラス名を取得している
                modal.find('.modal-body').val(sampledata);
              })
            </script>
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