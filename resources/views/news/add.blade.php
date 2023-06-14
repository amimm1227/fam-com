@extends('layouts.main')
@section('title', 'Fam-Com｜トップページ')
@section('content')

	<h1>お知らせ投稿</h1>
	<form class="news_form" method="POST" action="{{ route('news.store') }}">
    @csrf
    <textarea name="comment" rows="4" cols="50" maxlength="84" id="comment-textarea" placeholder="コメント内容"></textarea>
    <p id="comment-count">0 / 84 文字</p>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
	$(document).ready(function() {
	  $('#comment-textarea').on('input', function() {
	    var text = $(this).val();
	    var count = text.length;
	    $('#comment-count').text(count + ' / 84 文字');
	  });
	});
	</script>
    <input type="submit" value="投稿">
	</form>
@endsection