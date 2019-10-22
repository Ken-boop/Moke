@extends('layouts.app')
@section('title','ホーム')
<style>
#friend_register_on{
    
}
</style>
@section('content')
<section class="container m-5">
    <div class="row justify-content-center">
            <div class="col-8">
                <h2>通知一覧</h2>
                @foreach ($user->friends as $user)
                            <p>{{ $user->name }}から友達申請がきています。</p>
                            <form action="{{ route('notification.index',['user' => $user->id]) }}" method="post">
                                @csrf  
                                <button id="friend_register_off" type="submit">友達になる</button>                      
                            </form>                       
                @endforeach
            </div>
    </div>
    <a class="btn btn-info" href="{{ route('moke.index') }}">一覧に戻る</a>

@endsection
