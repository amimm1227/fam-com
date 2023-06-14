@extends('layouts.sub')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規ユーザー登録</div>

                <div class="card-body">             
                    <!--ここから編集-->
                    @guest
                    <form class="register_form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- ユーザー情報の入力フォーム -->
                        <div class="register_form_textbox">
                            <label for="name">ユーザーネーム（日本語可）</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    
                        <div class="register_form_textbox">
                            <label for="email">メールアドレス</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                        </div>
                    
                        <div class="register_form_textbox">
                            <label for="password">パスワード</label>
                            <input id="password" type="password" name="password" required>
                        </div>
                    
                        <!-- グループの選択フォーム -->
                        <div class="group_slect">
                            <label>
                                <input type="radio" name="group_option" value="create_group" checked>
                                新規グループを作成する
                            </label>
                        </div>
                    
                        <div class="existing_grp group_slect">
                            <label>
                                <input type="radio" name="group_option" value="join_group">
                                既存のグループに参加する
                            </label>
                        </div>
                    
                        <!-- 新規グループ作成フォーム -->
                        <div id="create-group-form">
                            <div class="register_form_textbox">
                                <label for="group_name">グループ名</label>
                                <input id="group_name" type="text" name="group_name" value="{{ old('group_name') }}">
                            </div>
                    
                            <div class="register_form_textbox">
                                <label for="group_password">グループパスワード</label>
                                <input id="group_password" type="password" name="group_password">
                            </div>
                        </div>

                        <!-- 送信ボタン -->
                        <div>
                            <button type="submit">登録</button>
                        </div>
                    </form>
                    
                    @endguest
                    <!--ここまで-->
                    
                    <div class="register_info">
                            <a href="/login">ログイン画面に戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
