@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">サーバーCPU使用率</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">サイト訪問数</span>
              <span class="info-box-number">368</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">取引数</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ユーザー数</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">売上推移</h5>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-wrench"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                  </div>
                </div>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2020 - 30 Jul, 2020</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    売上総数
                    <span class="float-right"><b>160</b>/200</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->

                  <div class="progress-group">
                    通知送信数
                    <span class="float-right"><b>310</b>/400</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">買取数</span>
                    <span class="float-right"><b>480</b>/800</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    通知反応数
                    <span class="float-right"><b>250</b>/500</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" style="width: 50%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">¥35,210</h5>
                    <span class="description-text">通知打ち上げ</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">¥10,390</h5>
                    <span class="description-text">総コスト</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">¥24,813</h5>
                    <span class="description-text">催促売り上げ数</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-6">
                  <div class="description-block">
                    <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">ミッション達成数</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">US-Visitors Report</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="d-md-flex">
                <div class="p-1 flex-fill" style="overflow: hidden">
                  <!-- Map will be created here -->
                  <div id="world-map-markers" style="height: 325px; overflow: hidden">
                    {{-- <div class="map"></div> --}}
                    <div id="map"></div>
                  </div>
                </div>
                <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                  <div class="description-block mb-4">
                    <h5 class="description-header">8,390</h5>
                    <span class="description-text">実店舗訪問数</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block mb-4">
                    <h5 class="description-header">30%</h5>
                    <span class="description-text">取引成功率</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block">
                    <h5 class="description-header">70%</h5>
                    <span class="description-text">目標達成率</span>
                  </div>
                  <!-- /.description-block -->
                </div><!-- /.card-pane-right -->
              </div><!-- /.d-md-flex -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box mb-3 bg-warning">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">タグ付け</span>
              <span class="info-box-number">5,200</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="far fa-heart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">アクティブ</span>
              <span class="info-box-number">92,050</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-danger">
            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ダウンロード</span>
              <span class="info-box-number">114,381</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box mb-3 bg-info">
            <span class="info-box-icon"><i class="far fa-comment"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">通知</span>
              <span class="info-box-number">163,921</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script>
    $(function () {
        'use strict'

        /* ChartJS
        * -------
        * Here we will create a few charts using ChartJS
        */

        //-----------------------
        // - MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $('#salesChart').get(0).getContext('2d')

        var salesChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
            {
                label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [28, 48, 40, 19, 86, 27, 90]
            },
            {
                label: 'Electronics',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40]
            }
            ]
        }

        var salesChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
            display: false
            },
            scales: {
            xAxes: [{
                gridLines: {
                display: false
                }
            }],
            yAxes: [{
                gridLines: {
                display: false
                }
            }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        // eslint-disable-next-line no-unused-vars
        var salesChart = new Chart(salesChartCanvas, {
            type: 'line',
            data: salesChartData,
            options: salesChartOptions
        }
        )
        //-----------------
        // - END PIE CHART -
        //-----------------

        /* jVector Maps
        * ------------
        * Create a world map with markers
        */
        $('#world-map-markers').mapael({
            map: {
                name: 'usa_states',
                zoom: {
                    enabled: true,
                    maxLevel: 10
                }
            }
        })
    })

    $(function(){
        //地域を設定
        //{"code":[地域のコード], "name": [地域の名前], "color":[地域につける色], "hoverColor":[地域をマウスでホバーしたときの色], "prefectures":[地域に含まれる都道府県のコード]}
        var areas = [
            {"code": 1 , "name":"北海道地方", "color":"#ca93ea", "hoverColor":"#e0b1fb", "prefectures":[1]},
            {"code": 2 , "name":"東北地方",   "color":"#a7a5ea", "hoverColor":"#d6d4fd", "prefectures":[2,3,4,5,6,7]},
            {"code": 3 , "name":"関東地方",   "color":"#84b0f6", "hoverColor":"#c1d8fd", "prefectures":[8,9,10,11,12,13,14]},
            {"code": 4 , "name":"北陸・甲信越地方",   "color":"#52d49c", "hoverColor":"#93ecc5", "prefectures":[15,16,17,18,19,20]},
            {"code": 4 , "name":"東海地方",   "color":"#77e18e", "hoverColor":"#aff9bf", "prefectures":[21,22,23,24]},
            {"code": 6 , "name":"近畿地方",   "color":"#f2db7b", "hoverColor":"#f6e8ac", "prefectures":[25,26,27,28,29,30]},
            {"code": 7 , "name":"中国地方",   "color":"#f9ca6c", "hoverColor":"#ffe5b0", "prefectures":[31,32,33,34,35]},
            {"code": 8 , "name":"四国地方",   "color":"#fbad8b", "hoverColor":"#ffd7c5", "prefectures":[36,37,38,39]},
            {"code": 9 , "name":"九州地方",   "color":"#f7a6a6", "hoverColor":"#ffcece", "prefectures":[40,41,42,43,44,45,46]},
            {"code":10 , "name":"沖縄地方",   "color":"#ea89c4", "hoverColor":"#fdcae9", "prefectures":[47]}
        ];
    
        $("#map").japanMap(
            {
                areas  : areas, //上で設定したエリアの情報
                selection : "prefecture", //選ぶことができる範囲(県→prefecture、エリア→area)
                borderLineWidth: 0.25, //線の幅
                drawsBoxLine : false, //canvasを線で囲む場合はtrue
                movesIslands : true, //南西諸島を左上に移動させるときはtrue、移動させないときはfalse
                showsAreaName : true, //エリア名を表示しない場合はfalse
                width: 450, //canvasのwidth。別途heightも指定可。
                backgroundColor: "#ffffff", //canvasの背景色
                font : "MS Mincho", //地図に表示する文字のフォント
                fontSize : 12, //地図に表示する文字のサイズ
                fontColor : "areaColor", //地図に表示する文字の色。"areaColor"でエリアの色に合わせる
                fontShadowColor : "black", //地図に表示する文字の影の色
            }
        );
    });

    </script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('plugins/map/jquery.japan-map.min.js') }}"></script>


@stop