@section('header')
<header id="header" class="d-flex justify-content-around align-content-center shadow-sm">
    <h1><a href="/" class="logo"><img id="logo" src="{{asset('img/layout/logo.png')}}" alt="HALMOTER" srcset=""></a></h1>
    <div id="link">
        @guest
        <a id="loginLink" href="{{ route('user.login') }}">ログイン</a>
        <a id="registerLink" href="{{ route('user.register') }}">新規登録</a>
        @else
        <a id="mypageLink" href="{{ route('user.mypage') }}">マイページ</a>
        <a id="logoutLink" href="{{ route('user.logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">ログアウト</a>
        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">@csrf</form>
        @endguest
    </div>
</header>
@endsection