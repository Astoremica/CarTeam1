@extends('layouts.layout')

<!-- head -->
@include('common.head')

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name1" class="col-md-4 col-form-label ">{{ __('苗字') }}</label>

                            <div class="col-md-6">
                                <input id="name1" type="text" class="form-control @error('name1') is-invalid @enderror" name="name1" value="{{ old('name1') }}" placeholder="春野" required autocomplete="name1" autofocus>

                                @error('name1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name2" class="col-md-4 col-form-label ">{{ __('名前') }}</label>

                            <div class="col-md-6">
                                <input id="name2" type="text" class="form-control @error('name2') is-invalid @enderror" name="name2" value="{{ old('name2') }}" placeholder="花子" required autocomplete="name2">

                                @error('name2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furi1" class="col-md-4 col-form-label ">{{ __('苗字(フリガナ)') }}</label>

                            <div class="col-md-6">
                                <input id="furi1" type="text" class="form-control @error('furi1') is-invalid @enderror" name="furi1" value="{{ old('furi1') }}" placeholder="ハルノ" required autocomplete="furi1">

                                @error('furi1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furi2" class="col-md-4 col-form-label ">{{ __('名前(フリガナ)') }}</label>

                            <div class="col-md-6">
                                <input id="furi2" type="text" class="form-control @error('furi2') is-invalid @enderror" name="furi2" value="{{ old('furi2') }}" placeholder="ハナコ" required autocomplete="furi2">

                                @error('furi2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name3" class="col-md-4 col-form-label ">{{ __('ニックネーム') }}</label>

                            <div class="col-md-6">
                                <input id="name3" type="text" class="form-control @error('name3') is-invalid @enderror" name="name3" value="{{ old('name3') }}" placeholder="HalHana" required autocomplete="name3">

                                @error('name3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label ">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="haruno@exanmple.com" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label ">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('パスワード再確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label ">{{ __('電話番号(ハイフン有り)') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" placeholder="090-1234-5678" required autocomplete="tel">

                                @error('tel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-4 col-form-label ">{{ __('郵便番号') }}</label>

                            <div class="col-md-6">
                                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" placeholder="555-5555" required autocomplete="postal_code">

                                @error('postal_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address1" class="col-md-4 col-form-label ">{{ __('都道府県') }}</label>

                            <div class="col-md-6">
                                <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}" placeholder="大阪府" required autocomplete="address1">

                                @error('address1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address2" class="col-md-4 col-form-label ">{{ __('市町村') }}</label>

                            <div class="col-md-6">
                                <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address2') }}" placeholder="大阪市" required autocomplete="address2">

                                @error('address2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address3" class="col-md-4 col-form-label ">{{ __('区以降') }}</label>

                            <div class="col-md-6">
                                <input id="address3" type="text" class="form-control @error('address3') is-invalid @enderror" name="address3" value="{{ old('address3') }}" placeholder="北区梅田3丁目3-1" required autocomplete="address3">

                                @error('address3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label ">{{ __('誕生日(数字のみ)') }}</label>

                            <div class="col-md-6">
                                <input id="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" placeholder="19800505" required autocomplete="birthday">

                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- header -->
@include('common.footer')