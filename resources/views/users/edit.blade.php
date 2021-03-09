@extends('layouts.layout')

@section('content')
    <div class="signupPage">
        <header class="header">
            <div>プロフールを編集</div>
        </header>

        <form action="/users/update/{{ $user->id }}" method="post" class="form mt-5" enctype="multipart/form-data">
        @csrf
        @error('email')
            <span class="errorMessage">
                {{ $message }}
            </span>
        @enderror

        <label for="file_photo" class="rounded-circle userProfileImg">
            <div class="userProfileImg_description">画像をアップロード</div>
            <i class="fas fa-camera fa-3x"></i>
            <input type="file" name="img_name" id="file_photo">
        </label>

        <div class="userImgPreview" id="userImgPreview">
            <img src="" accept="image/*" id="thumbnail" class="userImgPreview_content">
            <p class="userImgPreview_text">画像をアップロード済み</p>
        </div>
        <div class="form-group">
            <label>名前</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label>メールアドレス</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>
        <div class="form-group">
            <div><label>性別</label></div>
            <div class="form-check form-check-inline">
                <input type="radio" name="sex" value="0" id="inlineRadio1" class="form-check-input" @if($user->sex === 0) checked @endif>
                <label for="inlineRadio1" class="form-check-label">男</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="sex" value="1" id="inlineRadio2" class="form-check-input" @if($user->sex === 1) checked @endif>
                <label for="inlineRadio2" class="form-check-label">女</label>
            </div>
            <div class="form-group">
                <label>自己紹介文</label>
                <textarea name="self_introduction" rows="10" class="form-control">
                    {{ $user->self_introduction }}
                </textarea>
            </div>
        </div>

        <div class="text_center">
            <button type="submit" class="btn submitBtn">変更する</button>
        </div>
        </form>
    </div>
@endsection
