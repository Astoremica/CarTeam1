@section('header')
<header class="shadow-sm">
    <div class="d-flex justify-content-between mb-3">
        <h1><a href="/" class="logo"><img src="{{ asset('img/layout/logo5.png') }}" width="180px"></a></h1>
        <div class="logreg-btn">
            @guest
            <a href="{{ route('user.login') }}" class="mr-3 btn btn-outline-secondary">ログイン</a>
            <a href="{{ route('user.register') }}" class="mr-3 btn btn-outline-danger red">新規登録</a>
            @else
            <a href="{{ route('user.mypage') }}" class="mr-3 btn btn-outline-secondary">マイページ</a>
            <a href="{{ route('user.logout') }}" class="mr-3 btn btn-outline-danger red" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">ログアウト</a>
            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">@csrf</form>
            @endguest
        </div>
    </div>
</header>
@endsection