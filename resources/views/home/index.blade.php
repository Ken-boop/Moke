@extends('layouts.app')
@section('title','ホーム')

@section('content')
    <div class="button">
    <!-- イベント登録 -->
    <a href="{{ route('moke.create') }}" class="btn btn-primary">イベント登録</a>
    <!-- フレンド一覧 -->
    <a href="" class="btn btn-warning">フレンド一覧</a>
    <!-- プロフィール -->
    <a href="" class="btn btn-danger">プロフィール</a>
    </div>
    @foreach ($mokes as $moke)
        <div class="m-4 p-4 border border-primary">
            <p>{{ $moke->moke_name }}</p>
            <p>{{ $moke->due_date }}</p>
            <p>{{ $moke->end_date }}</p>
            <p>{{ $moke->moke_detail }}</p>
            <p>{{ $moke->address }}</p>
            <p>{{ $moke->created_at }}</p>
        </div>
        <a class="btn btn-success" href="{{ route('moke.edit', ['moke' => $moke->moke_id]) }}">イベント編集</a>
        
    @endforeach
@endsection