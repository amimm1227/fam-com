<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingItem;
use Illuminate\Http\Request;

class ShoppingItemController extends Controller
{
    public function index()
    {
        $items = ShoppingItem::limit(10)->get();

        return view('toppage')->with('items', $items);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'required',
            'deadline' => 'required',
        ]);
        
        $data['user_id'] = Auth::id();
        
        $shoppingItem = ShoppingItem::make($data);
        $shoppingItem->user()->associate(Auth::user());
        $shoppingItem->save();
    
        return redirect('/')->with('success', '商品を投稿しました');
    }

    public function checkItem($itemId)
    {
        $item = ShoppingItem::findOrFail($itemId);
        $item->purchased = true;
        $item->checked_by = auth()->user()->name;
        $item->save();

        return redirect('/')->with('success', '商品をチェックしました');
    }
}