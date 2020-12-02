@extends('layouts.layout')
<!-- head -->
@include('common.head')
<link rel="stylesheet" href="{{asset('css/user/homeStyle.css')}}" />

<!-- header -->
@include('common.header')

@section('content')
<div class="container">
    <div class="plans">
        <h2 class="datePlans">2020年08月22日開催予定</h2>
        <form action="#" method="get">
            <input type="text" name="serchWord" id="serchWord">
            <button type="submit"><img src="#" alt="検索"></button>
        </form>
        <div class="car">
            <!-- display:block -->
            <a href="#">
                <img src="#" alt="メーカー名:車種名" />
                <p>トヨタ</p>
                <p>ハリアー</p>
                <p>開始：11:00</p>
            </a>
        </div>
        <div class="car">
            <!-- display:block -->
            <a href="#">
                <img src="#" alt="メーカー名:車種名" />
                <p>メルセデス・ベンツ</p>
                <p>C180アバンギャルド</p>
                <p>開始：11:10</p>
            </a>
        </div>
        <div class="car">
            <!-- display:block -->
            <a href="#">
                <img src="#" alt="メーカー名:車種名" />
                <p>スズキ</p>
                <p>クロスビー</p>
                <p>開始：11:20</p>
            </a>
        </div>
        <div class="car">
            <!-- display:block -->
            <a href="#">
                <img src="#" alt="メーカー名:車種名" />
                <p>ランドローバー</p>
                <p>ディスカバリー</p>
                <p>開始：11:30</p>
            </a>
        </div>
        <a href="#">開催予定一覧へ</a>
    </div>
    <div class="serchMaker">
        <h2>メーカーから探す</h2>
        <ul>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />レクサス</a></li>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />トヨタ</a></li>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />ホンダ</a></li>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />日産</a></li>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />スズキ</a></li>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />マツダ</a></li>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />スバル</a></li>
            <li><a href=""><img src="" alt="メーカー名のロゴ" />三菱</a></li>
        </ul>
    </div>
    <div class="serchBodyType">
        <h2>ボディータイプから探す</h2>
        <ul>
            <li><a href=""><img src="" alt="ボディータイプの画像" />軽自動車</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />コンパクトカー</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />ミニバン</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />SUV・クロカン</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />セダン</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />オープンカー</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />トラック</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />軽自動車</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />コンパクトカー</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />ミニバン</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />SUV・クロカン</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />セダン</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />オープンカー</a></li>
            <li><a href=""><img src="" alt="ボディータイプの画像" />トラック</a></li>

        </ul>
    </div>
</div>

@endsection

<!-- header -->
@include('common.footer')