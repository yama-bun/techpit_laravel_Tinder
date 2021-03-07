@extends('layouts.layout')

@section('content')
    <div class="signinPage">
        <div class="container">
            <div class="userIcon">
                <i class="fas fa-user fa-3x"></i>
            </div>
            <h2 class="title">ログイン</h2>
            <form action="{{ route('login') }}" method="post" class="form">
            @csrf
                <div class="form-group @error('email')has-error @enderror">
                    <label>メールアドレス</label>
                    <input type="email" name="email" placeholder="メールアドレスを入力してください" class="form-control" autofocus>
                    @error('email')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group @error('password')has-error @enderror">
                    <label>パスワード</label>
                    <input type="password" name="password" placeholder="パスワードを入力してください" class="form-control">
                    @error('password')
                        <span class="errorMessage">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="loginBtn">ログイン</button>
                </div>
                <div class="linkToLogin">
                    <a href="{{ route('register') }}">アカウント作成はこちら</a>
                </div>
            </form>
        </div>
    </div>
@endsection
