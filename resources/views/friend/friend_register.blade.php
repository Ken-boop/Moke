@extends('layouts.app')
@section('title','ホーム')

@section('content')
    @foreach ($users as $user)
    @if ($user->id !== Auth::user()->id)
    <div>
        <p>{{ $user->name }}</p>
        <a href="{{ route('moke.create') }}" class="btn btn-primary">フレンドになる！</a>
        <br><br>
    </div>
    @endif
    @endforeach
    <br><br>
    <a href="{{ route('moke.index') }}" class="btn btn-danger">一覧ページに戻る</a>
@endsection