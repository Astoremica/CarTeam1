@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@stop

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">オークション登録</h3>
            </div>
            <div class="card-body">
              <!-- Date -->
              <div class="form-group">
                <form method="POST" action="/admin/regist/auction" autocomplete="off" name="carPost">
                  @csrf
                  <p>オークション名</p><input type="text" name="name" id="name" value="{{ $auction['name'] }}" {{ strpos($auction['name'],'実演用のテスト') !== false ? 'readonly':'' }}><br>
                  <p>※10時~17時 1時間につき1台(最大8件)</p>
                  <input type="hidden" name="date" value="{{ $date }}">
                  <input type="hidden" name="id" value="{{ isset($auction['id']) ? $auction['id']:'' }}">
                  <div id="input_pluralBox">
                    @if (!empty($auction_cars))
                      <h5>※登録済み車両が{{ count($auction_cars) }}台あります</h5 class="red">
                      @foreach($auction_cars as $car)
                      <div id="input_plural">
                        <select name="CARNO[]" class="opacity">
                          <option value="{{ $car->CARNO }}">{{ $car->CARNO . ' / ' . $car->MKRNM . ' / ' . $car->CARNM }}</option>
                        </select>
                      </div>
                      @endforeach
                    @endif
                    <div id="input_plural">
                      <select name="CARNO[]">
                        @foreach($cars as $car)
                          <option value="{{ $car->CARNO }}">{{ $car->CARNO . ' / ' . $car->MKRNM . ' / ' . $car->CARNM }}</option>
                        @endforeach
                      </select>
                      <input type="button" value="＋" class="add pluralBtn">
                      <input type="button" value="－" class="del pluralBtn">
                    </div>
                  </div>
                  @if ($errors->first('CARNO.*'))
                    <h5 class="validation red">※{{$errors->first('CARNO.*')}}</h5>
                  @endif
                  <button type="button" class="btn btn-primary" onclick="submit();">Submit</button>
                </form>
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
<!-- /.content -->
@stop

@section('css')
<style type="text/css">
  #input_plural {
    margin: 10px 0;
  }
  #input_plural input.form-control {
    display: inline-block;
    width: 75%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
  }
  .opacity{
    opacity: 0.6;
  }
  .red{
    color: red;
  }
  #input_plural input.pluralBtn {
    width: 30px;
    height: 30px;
    border: 1px solid #ccc;
    background: #fff;
    border-radius: 5px;
    padding: 0;
    margin: 0;
  }
</style>
@stop

@section('js')
<script>
  $(document).on("click", ".add", function() {
    if ($(this).parent().parent().children().length < 8) {
      $(this).parent().clone(true).insertAfter($(this).parent());
    }
  });
  $(document).on("click", ".del", function() {
    var target = $(this).parent();
    if (target.parent().children().length > 1) {
        target.remove();
    }
  });
</script>
@stop