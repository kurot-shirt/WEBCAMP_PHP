<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo会員登録</title>
</head>
<body>
    <h1>会員登録フォーム</h1>
    <form action="/register" method="post">
        @csrf
        name:<input type="text" name="name"><br>
        mail:<input type="text" name="email"><br>
        pass:<input type="password" name="password"><br>
        pass(確認):<input type="password" name="password_confirmation"><br>
        <button>登録する</button>
    </form>
</body>
</html>