@extends('layouts.layout')

<!-- header -->
@include('common.header')
<link rel="stylesheet" href="{{asset('css/app.css')}}" />
<link rel="stylesheet" href="{{asset('css/layout/header.css')}}" />

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- header -->
@include('common.footer')
