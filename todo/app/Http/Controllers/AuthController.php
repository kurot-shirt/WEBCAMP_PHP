<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(LoginPostRequest $request)
    {
        $datum = $request->validated();

        var_dump($datum); exit;
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('front.index'));
    }
}
