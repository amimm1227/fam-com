<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\ShoppingItem;
use App\Calendar;

class ToppageController extends Controller
{
    public function index()
    {
        $users = User::all();
        $group = null; // 初期化
        if (Auth::check()) {
            $group = Auth::user()->group; // ログインユーザーの所属するグループを代入
        }
        $groupId = auth()->user()->group_id;
        $posts = Post::whereHas('user', function ($query) use ($groupId) {
        $query->where('group_id', $groupId);
        })->latest()->take(5)->get();
        $calendar = new Calendar();
        $items = [];
        if ($groupId) {
            $items = ShoppingItem::whereHas('user', function ($query) use ($groupId) {
                $query->where('group_id', $groupId);
            })->latest()->take(10)->get();
        }
        // $items = ShoppingItem::limit(10)->get();
        // $items = ShoppingItem::whereHas('user', function ($query) use ($groupId) {
        // $query->where('group_id', $groupId);
        // })->latest()->take(10)->get();

        return view('toppage', compact('users', 'posts', 'items', 'calendar' , 'group'));
    }
}
