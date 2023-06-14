@extends('layouts.main')
@section('title', 'Fam-Com｜トップページ')
@section('content')

   <article class="news-area">
    <h1>伝言板</h1>
    <a href="/news/add"><div class="newspost-button">+</div></a>
    
    @foreach ($posts as $post)
        <section class="news-post">
            <p class="news-comment">{{ $post->comment }}</p>
            <p class="news-username">by.{{ $post->user->name }}</p>
        </section>
    @endforeach
   </article>
   
   <div class="shoppinglist">
   <h1>買い物リスト</h1>
   <!-- 商品投稿フォーム -->
   <form class="prd_record" action="/shopping-items" method="POST">
        @csrf
        <div>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        </div>
        <div class="product_name">
            <label for="product_name">商品名</label>
            <input type="text" name="product_name" id="product_name" required>
        </div>
        <div class="deadline">
            <label for="deadline">期日</label>
            <input type="date" name="deadline" id="deadline" required>
        </div>
        <button type="submit" class="prdrecord_btn">登録</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>商品名</th>
                <th>期日</th>
                <th>購入</th>
                <th>購入済み</th>
            </tr>
        </thead>
        <tbody>
                @if(Auth::check() && isset($group))
                    @foreach($items as $item)
                        @if($item->user->group_id == $group->id)
                            <tr>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->deadline }}</td>
                                <td>
                                    @if($item->purchased)
                                        {{ $item->checked_by }}
                                    @else
                                        <form class="check_btn" action="/shopping-items/{{ $item->id }}/check" method="POST">
                                            @csrf
                                            <button type="submit">買いました</button>
                                        </form>
                                    @endif
                                </td>
                                <td>{{ $item->purchased ? '購入済み' : '' }}</td>
                            </tr>
                        @endif
                    @endforeach
                @endif
        </tbody>
    </table>
    </div>

@endsection