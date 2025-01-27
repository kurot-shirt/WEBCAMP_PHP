@extends('layout')

{{--メインコンテンツ--}}
@section('contents')
    <h1>ログイン</h1>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
        </div>
    @endif
    <form action="/login" method="post">
        @csrf
        name:<input type="name" name="name"><br>
        email:<input type="text" name="email" value="{{ old('email') }}"><br>
        pass:<input type="password" name="password"><br>
        <button>ログインする</button><br>
        <a href="/register">会員登録</a>
    </form>
@endsection