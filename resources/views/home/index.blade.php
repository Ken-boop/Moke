@extends('layouts.app')
@section('title','ホーム')

@section('content')

<a href="{{ route('moke.create') }}" class="btn btn-primary btn-block">イベント登録</a>
    @foreach ($mokes as $moke)
        <div class="m-4 p-4 border border-primary">
            <p>{{ $moke->moke_name }}</p>
            <p>{{ $moke->due_date }}</p>
            <p>{{ $moke->end_date }}</p>
            <p>{{ $moke->moke_detail }}</p>
            <p>{{ $moke->address }}</p>
            <p>{{ $moke->created_at }}</p>
        </div>
    @endforeach
@endsection