<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function OpenNews() {
        $news = News::orderByDesc('id')->get();
        return view('news', ['news' => $news]);
    }
    public function ShowNews(Request $request) {
        return view('open_new', ['news_info' => News::find($request->new)]);
    }
}
