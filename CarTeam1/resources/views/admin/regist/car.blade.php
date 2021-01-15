@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <button type="button" class="btn btn-danger" onclick="addText()">テストデータ入力（自動生成）</button>
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
                <form method="POST" action="/admin/regist/car" autocomplete="off" name="carPost">
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
                        <label for="NAINO">内装色カラーNO</label>
                        <input type="text" class="form-control" name="NAINO" id="NAINO" placeholder="内装色カラーNO">
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
                      <button type="button" class="btn btn-danger" onclick="addText()">テストデータ入力（自動生成）</button>
                      <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    {{-- 車両情報（選択） --}}
                    <div id="car-part2" class="content" role="tabpanel" aria-labelledby="car-part2-trigger">
                      <div class="form-group">
                        <label for="option">装備品</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option1" name="options[]" value="PS">
                          <label for="option1" class="opacity">PS</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option2" name="options[]" value="PW">
                          <label for="option2" class="opacity">PW</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option3" name="options[]" value="ABS">
                          <label for="option3" class="opacity">ABS</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option4" name="options[]" value="AW">
                          <label for="option4" class="opacity">AW</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option5" name="options[]" value="カセット">
                          <label for="option5" class="opacity">カセット</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option6" name="options[]" value="CD">
                          <label for="option6" class="opacity">CD</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option7" name="options[]" value="MD">
                          <label for="option7" class="opacity">MD</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option8" name="options[]" value="TV">
                          <label for="option8" class="opacity">TV</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option9" name="options[]" value="ナビ">
                          <label for="option9" class="opacity">ナビ</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="option10" name="options[]" value="革シート">
                          <label for="option10" class="opacity">革シート</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="controller">リモコン</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="controller1" name="controllers[]" value="TV">
                          <label for="controller1" class="opacity">TV</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="controller2" name="controllers[]" value="ナビ">
                          <label for="controller2" class="opacity">ナビ</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="controller3" name="controllers[]" value="エアコン">
                          <label for="controller3" class="opacity">エアコン</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="controller4" name="controllers[]" value="オーディオ">
                          <label for="controller4" class="opacity">オーディオ</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="KOKSN">国産車</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KOKSN1" name="KOKSN" value="1" checked>
                          <label for="KOKSN1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KOKSN2" name="KOKSN" value="0">
                          <label for="KOKSN2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="ONEON">ワンオーナー車</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="ONEON1" name="ONEON" value="1" checked>
                          <label for="ONEON1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="ONEON2" name="ONEON" value="0">
                          <label for="ONEON2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="USRBY">ユーザー買取</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="USRBY1" name="USRBY" value="1" checked>
                          <label for="USRBY1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="USRBY2" name="USRBY" value="0">
                          <label for="USRBY2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="TWOTN">ツートン</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="TWOTN1" name="TWOTN" value="1" checked>
                          <label for="TWOTN1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="TWOTN2" name="TWOTN" value="0">
                          <label for="TWOTN2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="IROKE">色替</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="IROKE1" name="IROKE" value="1" checked>
                          <label for="IROKE1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="IROKE2" name="IROKE" value="0">
                          <label for="IROKE2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="SNSHS">新車保有書</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SNSHS1" name="SNSHS" value="1" checked>
                          <label for="SNSHS1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SNSHS2" name="SNSHS" value="0">
                          <label for="SNSHS2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="TRIST">取扱説明書</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="TRIST1" name="TRIST" value="1" checked>
                          <label for="TRIST1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="TRIST2" name="TRIST" value="0">
                          <label for="TRIST2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="SUNRF">サンルーフ</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SUNRF1" name="SUNRF" value="1" checked>
                          <label for="SUNRF1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SUNRF2" name="SUNRF" value="0">
                          <label for="SUNRF2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NENRY">燃料</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="NENRY1" name="NENRY" value="G" checked>
                          <label for="NENRY1">G</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="NENRY2" name="NENRY" value="D">
                          <label for="NENRY2">D</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="HANRT">販売ルート</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="HANRT1" name="HANRT" value="ディーラー" checked>
                          <label for="HANRT1">ディーラー</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="HANRT2" name="HANRT" value="並行">
                          <label for="HANRT2">並行</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="RHAND">ハンドル</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="RHAND1" name="RHAND" value="1" checked>
                          <label for="RHAND1">右</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="RHAND2" name="RHAND" value="0">
                          <label for="RHAND2">左</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="KDHSK">駆動方式</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KDHSK1" name="KDHSK" value="2WD" checked>
                          <label for="KDHSK1">2WD</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KDHSK2" name="KDHSK" value="4WD">
                          <label for="KDHSK2">4WD</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="MTRPN">メーターパネル</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="MTRPN1" name="MTRPN" value="通常" checked>
                          <label for="MTRPN1">通常</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="MTRPN2" name="MTRPN" value="交換">
                          <label for="MTRPN2">交換</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="MTRPN3" name="MTRPN" value="改ざん">
                          <label for="MTRPN3">改ざん</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="MTRPN4" name="MTRPN" value="不明">
                          <label for="MTRPN4">不明</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="SFTNB">シフトノブ位置</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SFTNB1" name="SFTNB" value="フロア" checked>
                          <label for="SFTNB1">フロア</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SFTNB2" name="SFTNB" value="コラム">
                          <label for="SFTNB2">コラム</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SFTNB3" name="SFTNB" value="ダッシュ">
                          <label for="SFTNB3">ダッシュ</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="MISYN">ミッション</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="MISYN1" name="MISYN" value="AT" checked>
                          <label for="MISYN1">AT</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="MISYN2" name="MISYN" value="MT">
                          <label for="MISYN2">MT</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="AIRBG">エアバック</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="AIRBG1" name="AIRBG" value="S" checked>
                          <label for="AIRBG1">S</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="AIRBG2" name="AIRBG" value="W">
                          <label for="AIRBG2">W</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="AIRCN">エアコン</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="AIRCN1" name="AIRCN" value="WAC" checked>
                          <label for="AIRCN1">WAC</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="AIRCN2" name="AIRCN" value="AAC">
                          <label for="AIRCN2">AAC</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="AIRCN3" name="AIRCN" value="AC">
                          <label for="AIRCN3">AC</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="AIRCN4" name="AIRCN" value="C">
                          <label for="AIRCN4">C</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="AIRCN5" name="AIRCN" value="無">
                          <label for="AIRN5">無</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="ENOSY">8ナンバー種別</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="ENOSY1" name="ENOSY" value="0" checked>
                          <label for="ENOSY1">無</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="ENOSY2" name="ENOSY" value="1">
                          <label for="ENOSY2">キャンピング</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="ENOSY3" name="ENOSY" value="2">
                          <label for="ENOSY3">放送宣伝</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="ENOSY3" name="ENOSY" value="3">
                          <label for="ENOSY3">その他</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NOXFG">NOX期限</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="NOXFG1" name="NOXFG" value="0" checked>
                          <label for="NOXFG1">可</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="NOXFG2" name="NOXFG" value="1">
                          <label for="NOXFG2">不適合</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="CARRK">車歴</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="CARRK1" name="CARRK" value="0" checked>
                          <label for="CARRK1">自家用車</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="CARRK2" name="CARRK" value="1">
                          <label for="CARRK2">事業用車</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="CARRK3" name="CARRK" value="2">
                          <label for="CARRK3">レンタカー</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="SYURK">修復歴</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SYURK1" name="SYURK" value="1" checked>
                          <label for="SYURK1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="SYURK2" name="SYURK" value="0">
                          <label for="SYURK2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="JAKKI">ジャッキ</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="JAKKI1" name="JAKKI" value="1" checked>
                          <label for="JAKKI1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="JAKKI2" name="JAKKI" value="0">
                          <label for="JAKKI2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="KOUGU">工具</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KOUGU1" name="KOUGU" value="1" checked>
                          <label for="KOUGU1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KOUGU2" name="KOUGU" value="0">
                          <label for="KOUGU2">×</label>
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    {{-- 検査員コメント --}}
                    <div id="comment-part" class="content" role="tabpanel" aria-labelledby="comment-part-trigger">
                      <div class="form-group">
                        <label for="KIZU">キズ</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KIZU1" name="KIZU" value="1">
                          <label for="KIZU1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KIZU2" name="KIZU" value="0" checked>
                          <label for="KIZU2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="KOGE">コゲ</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KOGE1" name="KOGE" value="1">
                          <label for="KOGE1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KOGE2" name="KOGE" value="0" checked>
                          <label for="KOGE2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="KGAN">コゲ穴</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KGAN1" name="KGAN" value="1">
                          <label for="KGAN1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KGAN2" name="KGAN" value="0" checked>
                          <label for="KGAN2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="YGRE">汚れ</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="YGRE1" name="YGRE" value="1">
                          <label for="YGRE1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="YGRE2" name="YGRE" value="0" checked>
                          <label for="YGRE2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="YBRE">破れ</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="YBRE1" name="YBRE" value="1">
                          <label for="YBRE1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="YBRE2" name="YBRE" value="0" checked>
                          <label for="YBRE2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="KNEN">禁煙車</label><br>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KNEN1" name="KNEN" value="1">
                          <label for="KNEN1">〇</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="KNEN2" name="KNEN" value="0" checked>
                          <label for="KNEN2">×</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="CMNT">検査員コメント</label>
                        <input type="text" class="form-control" name="CMNT" id="CMNT" placeholder="コメント">
                      </div>
                      <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    {{-- 車両ステータス（図） --}}
                    <div id="status-part" class="content" role="tabpanel" aria-labelledby="status-part-trigger">
                      @for ($i = 1; $i < 26; $i ++)
                        <div class="form-group">
                          <label for="option">項番{{ $i }}</label><br>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}A" name="status{{ $i }}[]" value="A">
                            <label for="{{ $i }}A" class="opacity">A(キズ)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}U" name="status{{ $i }}[]" value="U">
                            <label for="{{ $i }}U" class="opacity">U(凹)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}W" name="status{{ $i }}[]" value="W">
                            <label for="{{ $i }}W" class="opacity">W(補修波)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}X" name="status{{ $i }}[]" value="X">
                            <label for="{{ $i }}X" class="opacity">X(要交換)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}XX" name="status{{ $i }}[]" value="XX">
                            <label for="{{ $i }}XX" class="opacity">XX(交換済み)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}P" name="status{{ $i }}[]" value="P">
                            <label for="{{ $i }}P" class="opacity">P(要塗装)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}S" name="status{{ $i }}[]" value="S">
                            <label for="{{ $i }}S" class="opacity">S(錆)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}C" name="status{{ $i }}[]" value="C">
                            <label for="{{ $i }}C" class="opacity">C(腐食)</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="{{ $i }}B" name="status{{ $i }}[]" value="B">
                            <label for="{{ $i }}B" class="opacity">B(優凹)</label>
                          </div>
                        </div>
                      @endfor
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
  <!-- iCheck for checkboxes and radio inputs -->
  <link href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">

  <style type="text/css">
  .opacity{
    opacity: 0.7;
  }
  .alert-success{
    opacity: 0.7;
    margin-top: 5px;
    margin-bottom: 0px;
  }
  </style>
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

  // テストデータ自動作成
  function addText()
  {
    // テキストセット
    var n_eisu = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
    var l_eisu = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
    var number = "0123456789"
    var hira   = "ぁあぃいぅうぇえぉおかがきぎくぐけげこごさざしじすずせぜそぞただちぢっつづてでとどなにぬねのはばぱひびぴふぶぷへべぺほぼぽまみむめもゃやゅゆょよらりるれろゎわゐゑをん";
    var kata   = "ァアィイゥウェエォオカガキギクグケゲコゴサザシジスズセゼソゾタダチヂッツヅテデトドナニヌネノハバパヒビピフブプヘベペホボポマミムメモャヤュユョヨラリルレロヮワヲンヴヵヶ";
    var TNOKN  = "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワ";
    // 配列セット
    var nen2  = ["95", "96", "97", "98", "99", "00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20"];
    var tuki  = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
    var nen4  = ["1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020"];
    var maker = ["レクサス", "トヨタ", "マツダ", "ダイハツ", "スバル", "ホンダ", "三菱", "スズキ", "日産", "メルセデス・ベンツ", "BMW", "フォルクスワーゲン", "アウディ", "ミニ", "ポルシェ", "ボルボ" , "プジョー" , "シトロエン"]
    var body  = ["軽自動車", "SUV・クロカン", "ステーションワゴン", "セダン", "クーペ", "オープンカー", "ハッチパック", "ピックアップトラック", "ミニバン・ワゴン", "トラック・その他"]
    var TNORK = ["ヨコハマ", "ショウナン", "シナガワ", "コウベ", "カワゴエ", "サッポロ", "セタガヤ", "オワリコマキ", "ナニワ", "スズカ"]
    // 色取得
    var gaiColorArray = randomGaiColor()
    var naiColorArray = randomNaiColor()
    // 自動生成
    document.carPost.CARNO.value = randomText(l_eisu, randomNum(1,5)) + '-' + randomText(n_eisu, randomNum(5,7))
    document.carPost.UKENO.value = randomText(number, 8)
    document.carPost.TYOID.value = randomText(number, 3)
    document.carPost.NENSK.value = randomArray(nen2) + randomArray(tuki)
    document.carPost.CARNM.value = randomName()
    document.carPost.MKRNM.value = randomArray(maker)
    document.carPost.HIKRY.value = Math.round(randomNum(660, 2000) / 10) * 10
    document.carPost.MDLNE.value = randomArray(nen4)
    document.carPost.GRADE.value = randomName()
    document.carPost.KATSK.value = randomText(l_eisu, randomNum(2,5)) + '-' + randomText(l_eisu, randomNum(2,6))
    document.carPost.TEIIN.value = randomNum(2,7)
    document.carPost.DOASU.value = randomNum(2,5)
    document.carPost.KEIZO.value = randomArray(body)
    document.carPost.SKSRY.value = document.carPost.TEIIN.value * 10
    document.carPost.SOUKM.value = Math.round(randomNum(0, 100000) / 100) * 10
    document.carPost.GAISK.value = gaiColorArray[0]
    document.carPost.GAINO.value = gaiColorArray[1]
    document.carPost.COLOR.value = gaiColorArray[2]
    document.carPost.NAISK.value = naiColorArray[0]
    document.carPost.NAINO.value = naiColorArray[1]
    document.carPost.GIASU.value = randomNum(6,10)
    document.carPost.KENKG.value = randomNum(2021,2030).toString() + randomArray(nen4) + ( '00' + randomNum(1,30) ).slice( -2 )
    document.carPost.TNORK.value = randomArray(TNORK);
    document.carPost.TNOBN.value = randomText(number, 3);
    document.carPost.TNOKN.value = randomText(TNOKN, 1);
    document.carPost.TNORN.value = randomNum(10,99).toString() + randomNum(10,99).toString();
    document.carPost.MIHKG.value = randomArray(tuki) + ( '00' + randomNum(1,30) ).slice( -2 );
    document.carPost.KTSNO.value = randomText(number, 5);
    document.carPost.RKBNO.value = randomText(number, 3);
    document.carPost.COMNT.value = '特記事項無し';
    document.carPost.KTRKN.value = randomNum(100,10000);
  }

  function randomNum(min, max){
    return Math.floor( Math.random() * (max + 1 - min) ) + min
  }

  function randomText(set, mlenght) {
    return Array.from(crypto.getRandomValues(new Uint32Array(mlenght))).map((n)=>set[n%set.length]).join('')
  }

  function randomName() {
    var firstKata = "アイウエオカガキギクグケゲコゴサザシジスズセゼソゾタダチヂツヅテデトドナニヌネノハバパヒビピフブプヘベペホボポマミムメモヤユヨラリルレロワヴ";
    var kata      = "ァアィイゥウェエォオカガキギクグケゲコゴサザシジスズセゼソゾタダチヂッツヅテデトドナニヌネノハバパヒビピフブプヘベペホボポマミムメモャヤュユョヨラリルレロヮワヲンヴヵヶ";
    var ei        = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    var su        = "0123456789"
    var lenght1 = randomNum(3, 6)
    var lenght2 = randomNum(1, 5)
    var lenght3 = randomNum(1, 5)
    var ans = ""

    switch (Math.floor( Math.random() * 6 )) {
      case 0: // カタカナ
        ans = Array.from(crypto.getRandomValues(new Uint32Array(1))).map((n)=>firstKata[n%firstKata.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght1))).map((n)=>kata[n%kata.length]).join('') 
        break;
      case 1: // カタカナ + 英字
        ans = Array.from(crypto.getRandomValues(new Uint32Array(1))).map((n)=>firstKata[n%firstKata.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght1))).map((n)=>kata[n%kata.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght2))).map((n)=>ei[n%ei.length]).join('')
        break;
      case 2: // カタカナ + 数字
        ans = Array.from(crypto.getRandomValues(new Uint32Array(1))).map((n)=>firstKata[n%firstKata.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght1))).map((n)=>kata[n%kata.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght2))).map((n)=>su[n%su.length]).join('')
        break;
      case 3: // カタカナ + 英字　+ 数字
        ans = Array.from(crypto.getRandomValues(new Uint32Array(1))).map((n)=>firstKata[n%firstKata.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght1))).map((n)=>kata[n%kata.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght2))).map((n)=>ei[n%ei.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght3))).map((n)=>su[n%su.length]).join('')
        break;
      case 4: // 英字
        ans = Array.from(crypto.getRandomValues(new Uint32Array(lenght1))).map((n)=>ei[n%ei.length]).join('')
        break;
      case 5: // 英字 + 数字
        ans = Array.from(crypto.getRandomValues(new Uint32Array(lenght1))).map((n)=>ei[n%ei.length]).join('')
            + Array.from(crypto.getRandomValues(new Uint32Array(lenght2))).map((n)=>su[n%su.length]).join('')
        break;
      default:
        break;
    }
    return ans
  }

  function randomGaiColor(){
    var num   = randomNum(0,18)
    var GAISK = ["ホワイトパールクリスタルシャイン", "ホワイトパールクリスタルシャイン", "シルバーメタリック", "グレーメタリック", "ブラック", "ボルドーマイカ", "ダークレッドマイカメタリック", "レッドマイカメタリック", "ボルドーマイカメタリック", "ベージュメタリック", "ベージュメタリック", "ダークブラウンマイカメタリック", "シルキーゴールドマイカメタリック", "ライトグリーンメタリック", "ターコイズマイカメタリック", "グレイッシュブルーマイカメタリック", "ブルーメタリック", "ダークブルーマイカ", "ライトブルーマイカメタリック"]
    var GAINO = ["070", "073", "1F7", "1G2", "202", "3P2", "3Q3", "3R3", "3R9", "4M9", "4T8", "4U3", "5A4", "6U5", "779", "8N6", "8P1", "8S6", "8S7"]
    var COLOR = ["白", "白", "灰", "灰", "黒", "赤", "赤", "赤", "赤", "黄", "黄", "茶", "茶", "緑", "緑", "青", "青", "青", "青"]

    return [ GAISK[num], GAINO[num], COLOR[num]];
  }

  function randomNaiColor(){
    var num   = randomNum(0,3)
    var NAISK = ["ホワイト", "ブラック", "グレー", "ブラウン"]
    var NAINO = ["239", "523", "321", "632"]

    return [ NAISK[num], NAINO[num] ];
  }

  function randomArray(array){
    return array[Math.floor(Math.random() * array.length)]
  }
  
  </script>

@stop