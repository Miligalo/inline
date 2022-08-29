<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Content;
use App\Models\House;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('main.index', compact( 'comments'));
    }

    public function search(Request $request)
    {
        $search = $request->input('body');
        $comments = Comment::query()->where('body', 'LIKE', "%{$search}%")->get();

        return view('main.index', compact('comments'));
    }


}
