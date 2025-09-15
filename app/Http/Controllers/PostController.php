<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

// class PostController extends Controller implements HasMiddleware
class PostController extends Controller 

{
    // public static function middleware()
    // {
    //     return [
    //         new Middleware(CheckRoleMiddleware::class,only:['store']),
    //     ];
    // }




    public function index()
    {
        return view('posts.index');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
