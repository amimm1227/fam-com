<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('news.add');
    }

    public function store(Request $request)
    {
        // 入力値のバリデーションなどの処理を追加することが推奨されます
    
        $data = $request->all();
    
        $post = new Post();
        $post->comment = $data['comment'];
        $post->user_id = Auth::id(); // ログインユーザーのIDを取得する例
    
        if ($post->save()) {
            return redirect('/')->with('success', '投稿が保存されました。');
        } else {
            return back()->with('error', '投稿の保存に失敗しました。');
        }
    }
}
