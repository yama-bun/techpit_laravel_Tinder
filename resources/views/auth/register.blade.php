@extends('layouts.layout')

@section('content')
    <div class="signupPage">
        <header class="header">
            <div>アカウント作成</div>
        </header>
        <div class="container">

            <form action="{{ route('register') }}" method="post" class="form mt-5" enctype="multipart/form-data">
            @csrf
                <label for="file_photo" class="rounded-circle userProfileImg">
                    <div class="userProfileImg_description">画像をアップロード</div>
                    <i class="fas fa-camera fa-3x"></i>
                    <input type="file" name="img_name" id="file_photo">

                </label>
                <div class="userImgPreview" id="userImgPreview">
                    <img src="" accept="image/*" id="thumbnail" class="userImgPreview_content">
                    <p class="userImgPreview_text">画像をアップロード済み</p>
                </div>

                <div class="form-group @error('name')has-error @enderror">
                    <label>名前</label>
                    <input type="text" name="name" placeholder="名前を入力してください" class="form-control">
                    @error('name')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group @error('email')has-error @enderror">
                    <label>メールアドレス</label>
                    <input type="email" name="email" placeholder="メールアドレスを入力してください" class="form-control">
                    @error('email')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group @error('password')has-error @enderror">
                    <label>パスワード</label>
                    <em>6文字以上入力してください</em>
                    <input type="password" name="password" placeholder="パスワードを入力してください" class="form-control">
                    @error('password')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>確認用パスワード</label>
                    <input type="password" name="password_confirmation" placeholder="パスワードを再度入力してください" class="form-control">
                </div>

                <div class="form-group">
                    <div><label>性別</label></div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="sex" value="0" id="inlineRadio1" class="form-check-input" checked>
                        <label for="inlineRadio1" class="form-check-label">男</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="sex" value="1" class="form-check-input" id="inlineRadio2">
                        <label for="inlineRadio2" class="form-check-label">女</label>
                    </div>
                </div>

                <div class="form-group @error('self_introduction')has-error @enderror">
                    <label>自己紹介文</label>
                    <textarea name="self_introduction" rows="10" class="form-control"></textarea>
                    @error('self_introduction')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn submitBtn">はじめる</button>
                    <div class="linkToLogin">
                        <a href="{{ route('login') }}">ログインはこちら</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
