@extends('layouts.app')
@section('title','ホーム')

@section('content')
    @foreach ($users as $user)
    @if ($user->id !== Auth::user()->id)
        <p>ok</p>
    <div>
        <p>{{ $user->name }}</p>
        <a href="{{ route('moke.create') }}" class="btn btn-primary">フレンドになる！</a>
        <br><br>
    </div>
    @endif
    @endforeach
@endsection