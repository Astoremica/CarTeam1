@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Dashboard</h1>
@stop

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">車両登録</h3>
            </div>
            <div class="card-body p-0">
              <div class="bs-stepper">
                <div class="bs-stepper-header" role="tablist">
                  <!-- your steps here -->
                  <div class="step" data-target="#car-part1">
                    <button type="button" class="step-trigger" role="tab" aria-controls="car-part1" id="car-part1-trigger">
                      <span class="bs-stepper-circle">1</span>
                      <span class="bs-stepper-label">車両情報（入力）</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#car-part2">
                    <button type="button" class="step-trigger" role="tab" aria-controls="car-part2" id="car-part2-trigger">
                      <span class="bs-stepper-circle">2</span>
                      <span class="bs-stepper-label">車両情報（選択）</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#comment-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="comment-part" id="comment-part-trigger">
                      <span class="bs-stepper-circle">3</span>
                      <span class="bs-stepper-label">検査員コメント</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#status-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="status-part" id="status-part-trigger">
                      <span class="bs-stepper-circle">4</span>
                      <span class="bs-stepper-label">車両ステータス(図)</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#img-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="img-part" id="img-part-trigger">
                      <span class="bs-stepper-circle">5</span>
                      <span class="bs-stepper-label">車両画像</span>
                    </button>
                  </div>
                </div>
                <form method="POST" action="/admin/regist/car" autocomplete="off">
                  @csrf
                  <div class="bs-stepper-content">
                    {{-- 車両情報（入力） --}}
                    <div id="car-part1" class="content" role="tabpanel" aria-labelledby="car-part1-trigger">
                      <div class="form-group">
                        <label for="CARNO">車台NO</label>
                        <input type="text" class="form-control" name="CARNO" id="CARNO" placeholder="車台NO">
                      </div>
                      <div class="form-group">
                        <label for="UKENO">受付番号</label>
                        <input type="number" class="form-control" name="UKENO" id="UKENO" placeholder="受付番号">
                      </div>
                      <div class="form-group">
                        <label for="TYOID">帳票ID</label>
                        <input type="text" class="form-control" name="TYOID" id="TYOID" placeholder="帳票ID">
                      </div>
                      <div class="form-group">
                        <label for="NENSK">年式</label>
                        <input type="text" class="form-control" name="NENSK" id="NENSK" placeholder="年式">
                      </div>
                      <div class="form-group">
                        <label for="CARNM">車種名</label>
                        <input type="text" class="form-control" name="CARNM" id="CARNM" placeholder="車種名">
                      </div>
                      <div class="form-group">
                        <label for="MKRNM">メーカー名</label>
                        <input type="text" class="form-control" name="MKRNM" id="MKRNM" placeholder="メーカー名">
                      </div>
                      <div class="form-group">
                        <label for="HIKRY">排気量</label>
                        <input type="text" class="form-control" name="HIKRY" id="HIKRY" placeholder="排気量">
                      </div>
                      <div class="form-group">
                        <label for="MDLNE">モデル年式</label>
                        <input type="text" class="form-control" name="MDLNE" id="MDLNE" placeholder="モデル年式">
                      </div>
                      <div class="form-group">
                        <label for="GRADE">グレード</label>
                        <input type="text" class="form-control" name="GRADE" id="GRADE" placeholder="グレード">
                      </div>
                      <div class="form-group">
                        <label for="KATSK">型式</label>
                        <input type="text" class="form-control" name="KATSK" id="KATSK" placeholder="型式">
                      </div>
                      <div class="form-group">
                        <label for="TEIIN">定員</label>
                        <input type="text" class="form-control" name="TEIIN" id="TEIIN" placeholder="定員">
                      </div>
                      <div class="form-group">
                        <label for="DOASU">ドア数</label>
                        <input type="text" class="form-control" name="DOASU" id="DOASU" placeholder="ドア数">
                      </div>
                      <div class="form-group">
                        <label for="KEIZO">形状</label>
                        <input type="text" class="form-control" name="KEIZO" id="KEIZO" placeholder="形状">
                      </div>
                      <div class="form-group">
                        <label for="SKSRY">最大積載量</label>
                        <input type="text" class="form-control" name="SKSRY" id="SKSRY" placeholder="最大積載量">
                      </div>
                      <div class="form-group">
                        <label for="SOUKM">走行距離(km)</label>
                        <input type="text" class="form-control" name="SOUKM" id="SOUKM" placeholder="走行距離(km)">
                      </div>
                      <div class="form-group">
                        <label for="GAISK">外装色</label>
                        <input type="text" class="form-control" name="GAISK" id="GAISK" placeholder="外装職">
                      </div>
                      <div class="form-group">
                        <label for="GAINO">外装色カラーNO</label>
                        <input type="text" class="form-control" name="GAINO" id="GAINO" placeholder="外装色カラーNO">
                      </div>
                      <div class="form-group">
                        <label for="COLOR">色（系統）</label>
                        <input type="text" class="form-control" name="COLOR" id="COLOR" placeholder="色（系統）">
                      </div>
                      <div class="form-group">
                        <label for="NAISK">内装色</label>
                        <input type="text" class="form-control" name="NAISK" id="NAISK" placeholder="内装色">
                      </div>
                      <div class="form-group">
                        <label for="NNAINO">内装色カラーNO</label>
                        <input type="text" class="form-control" name="NNAINO" id="NNAINO" placeholder="内装色カラーNO">
                      </div>
                      <div class="form-group">
                        <label for="GIASU">ギア数</label>
                        <input type="text" class="form-control" name="GIASU" id="GIASU" placeholder="ギア数">
                      </div>
                      <div class="form-group">
                        <label for="KENKG">検査期限</label>
                        <input type="text" class="form-control" name="KENKG" id="KENKG" placeholder="検査期限">
                      </div>
                      <div class="form-group">
                        <label for="TNORK">登録NO-陸事名(カナ)</label>
                        <input type="text" class="form-control" name="TNORK" id="TNORK" placeholder="登録NO-陸事名(カナ)">
                      </div>
                      <div class="form-group">
                        <label for="TNOBN">登録NO-分類番号</label>
                        <input type="text" class="form-control" name="TNOBN" id="TNOBN" placeholder="登録NO-分類番号">
                      </div>
                      <div class="form-group">
                        <label for="TNOKN">登録NO-カナ</label>
                        <input type="text" class="form-control" name="TNOKN" id="TNOKN" placeholder="登録NO-カナ">
                      </div>
                      <div class="form-group">
                        <label for="TNORN">登録NO-連番</label>
                        <input type="text" class="form-control" name="TNORN" id="TNORN" placeholder="登録NO-連番">
                      </div>
                      <div class="form-group">
                        <label for="MIHKG">名変期限</label>
                        <input type="text" class="form-control" name="MIHKG" id="MIHKG" placeholder="名変期限">
                      </div>
                      <div class="form-group">
                        <label for="KTSNO">型式指定番号</label>
                        <input type="text" class="form-control" name="KTSNO" id="KTSNO" placeholder="型式指定番号">
                      </div>
                      <div class="form-group">
                        <label for="RKBNO">類別区分番号</label>
                        <input type="text" class="form-control" name="RKBNO" id="RKBNO" placeholder="類別区分番号">
                      </div>
                      <div class="form-group">
                        <label for="COMNT">コメント</label>
                        <input type="text" class="form-control" name="COMNT" id="COMNT" placeholder="コメント">
                      </div>
                      <div class="form-group">
                        <label for="KTRKN">買取金額(千円)</label>
                        <input type="text" class="form-control" name="KTRKN" id="KTRKN" placeholder="買取金額(千円)" autocomplete="off">
                      </div>
                      <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    {{-- 車両情報（選択） --}}
                    <div id="car-part2" class="content" role="tabpanel" aria-labelledby="car-part2-trigger">
                      <div class="form-group">
                      
                      </div>
                      <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    {{-- 検査員コメント --}}
                    <div id="comment-part" class="content" role="tabpanel" aria-labelledby="comment-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    {{-- 車両ステータス（図） --}}
                    <div id="status-part" class="content" role="tabpanel" aria-labelledby="status-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    {{-- 車両画像 --}}
                    <div id="img-part" class="content" role="tabpanel" aria-labelledby="img-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputFile">車両画像</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="button" class="btn btn-primary" onclick="submit();">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
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
  <!-- BS Stepper -->
  <link href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}" rel="stylesheet">
@stop

@section('js')
  <!-- BS-Stepper -->
  <script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });
  
  </script>

@stop