<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests\TaskRegisterPostRequest;

class ListController extends Controller
{
    public function list()
    {
        return view('todo.list');
    }
    public function register(TTaskRegisterPostRequest $request)
    {
        $datum = $request->validated();
        var_dump($datum); exit;
    }
}
