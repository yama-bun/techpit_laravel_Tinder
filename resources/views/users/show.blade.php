@extends('layouts.layout')

@section('content')
    <div class="usershowPage">
        <div class="container">
            <header class="header">
                <p class="header_logo">
                    <a href="{{ route('home') }}">
                        <img src="/storage/images/techpit-match-icon.png">
                    </a>
                </p>
            </header>
            <div class="userInfo">
                <div class="userInfo_img">
                    <img src="/storage/images/{{ $user->img_name }}">
                </div>
                <div class="userInfo_name">{{ $user->name }}</div>
                <div class="userInfo_selfIntroduction">{{ $user->self_introduction }}</div>
            </div>

            <div class="userAction">
                <div class="userAction_edit userAction_common">
                    <a href="/users/edit/{{ $user->id }}"><i class="fas fa-edit fa-2x"></i></a>
                    <span>情報を編集</span>
                </div>
                <div class="userAction_logout userAction_common">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-cog fa-2x"></i>
                    </a>
                    <span>ログアウト</span>
                    <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
