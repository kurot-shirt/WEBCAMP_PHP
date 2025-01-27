@extends('layout')

{{--タイトル--}}
@section('title')やりたいことリスト@endsection

{{--メインコンテンツ--}}
@section('contents')
    <h1>2025年にやりたいことリスト100</h1>
       <form action="" method="post">
        やりたいこと:<input type="text" name="name"><br>
        いつまでにする？:<input type="date" name="period"><br>
        <button>登録する</button>
       </form>

    <h1>やりたいことリスト100</h1>
    <table border="1">
        <tr>
            <th>やりたいこと</th>
            <th>実行予定日</th>
        </tr>
        <tr>
            <th>　</th>
            <th>　</th>
        </tr>
    </table>
    <a href="/logout">ログアウトする</a><br>
@endsection