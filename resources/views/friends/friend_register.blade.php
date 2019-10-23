@extends('layouts.app')
@section('title','ホーム')

@section('content')

    @foreach ($users as $user)
        @if (Auth::user()->id !== $user->id)
        <div class="m-4 p-4 border border-primary">
            <p>{{ $user->name }}</p>
            <form action="{{ route('friend.index',['user' => $user->id]) }}" method="post">
            @csrf
            <button class="btn-primary" type="submit">友達申請</button>
            <button class="btn-primary" type="submit">申請済</button>
            </form>
        </div>
        @endif
    @endforeach

    <a class="btn btn-info friend_register_btn" href="{{ route('moke.index') }}">一覧に戻る</a>
    

@endsection