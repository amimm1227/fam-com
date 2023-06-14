@extends('layouts.main')
@section('title', 'Fam-Com｜トップページ')
@section('content')

    <article class="news-area">
    	<h1>お知らせ</h1>
    	<a href="#"><div class="newspost-button">+</div></a>
    	<section class="news-post">
    		<p class="news-comment">コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメ</p>
    		<p class="news-username">by.投稿ユーザー名</p>
    	</section>
    	<section class="news-post">
    		<p class="news-comment">コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメ</p>
    		<p class="news-username">by.投稿ユーザー名</p>
    	</section>
    	<section class="news-post">
    		<p class="news-comment">コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメント内容コメ</p>
    		<p class="news-username">by.投稿ユーザー名</p>
    	</section>
    </article>
		
	<div class="calendar-area">
			
		<table>
			<tr>
				<th> </th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th>
			</tr>
			<tr>
				<td class="calendar-user">ユーザー1</td><td><div class="holiday">休み</div><div class="outing">外出</div><div class="plan">予定</div></td><td><div class="holiday">休み</div></td><td><div class="holiday">休み</div></td><td><div class="holiday">休み</div></td><td><div class="holiday">休み</div></td><td><div class="holiday">休み</div></td><td><div class="holiday">休み</div></td>
			</tr>
			<tr>
				<td class="calendar-user">ユーザー2</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			</tr>
			<tr>
				<td class="calendar-user">ユーザー3</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			</tr>
			<tr>
				<td>ゴミ捨て<br>カレンダー</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			</tr>
		</table>
			
	</div>
		
	<div class="todo-area">
	</div>
		
	<div class="shoppinglist-area">
	</div>
@endsection