@extends('layouts.layout')

@section('content')
    <div class="matchingPage">
        <header class="header">
            <i class="fas fa-comments fa-3x"></i>
            <div class="header_logo"><a href="{{ route('home') }}"><img src="/storage/images/techpit-match-icon.png"></a></div>
        </header>
        <div class="container">
            <div class="mt-5">
                <div class="matchingNum">{{ $match_users_count }}人とマッチングしています</div>
                <h2 class="pageTitle">マッチングした人一覧</h2>
                <div class="matchingList">
                    @foreach ($matching_users as $user)
                        <div class="matchingPerson">
                            <div class="matchingPerson_img">
                                <img src="/storage/images/{{ $user->img_name }}"
                            </div>
                            <div class="matchingPerson_name">{{ $user->name }}</div>
                            <form action="{{ route('chat.show') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button type="submit" class="chatForm_btn">チャットを開く</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
