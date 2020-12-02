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
                  <div class="step" data-target="#car-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="car-part" id="car-part-trigger">
                      <span class="bs-stepper-circle">1</span>
                      <span class="bs-stepper-label">車両情報</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#comment-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="comment-part" id="comment-part-trigger">
                      <span class="bs-stepper-circle">2</span>
                      <span class="bs-stepper-label">検査員コメント</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#status-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="status-part" id="status-part-trigger">
                      <span class="bs-stepper-circle">3</span>
                      <span class="bs-stepper-label">車両ステータス(図)</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#img-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="img-part" id="img-part-trigger">
                      <span class="bs-stepper-circle">4</span>
                      <span class="bs-stepper-label">車両画像</span>
                    </button>
                  </div>
                </div>
                <div class="bs-stepper-content">
                  <!-- your steps content here -->
                  <div id="car-part" class="content" role="tabpanel" aria-labelledby="car-part-trigger">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                  </div>
                  <div id="comment-part" class="content" role="tabpanel" aria-labelledby="comment-part-trigger">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                  </div>
                  <div id="status-part" class="content" role="tabpanel" aria-labelledby="status-part-trigger">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                  </div>
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
                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
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