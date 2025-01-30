<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //トップページを表示する
    public function index()
    {
        return view('index');
    }

    //ログイン処理
    public function login(LoginPostRequest $request)
    {
        $datum = $request->validated();

        //var_dump($datum); exit;

        //認証に失敗した場合
        if (Auth::attempt($datum) === false) {
            return back()
                   ->withInput()
                   ->withErrors(['auth' => 'emailかパスワードに誤りがあります'])
                   ;
        }

        //認証に成功した場合
        $request->sesion()->regenerate();
        return redirect()->intended('/todo/list');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('front.index'));
    }
}
