@extends('layouts.app')
@section('title','イベント詳細')

@section('content')
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <!-- <form action="{{ route('moke.detail',['id' => $moke->id ]) }}" method="POST"> -->
            @csrf
              <div class="m-4 p-4 border border-primary">
                  <p>{{ $moke->moke_name }}</p>
                  <p>{{ $moke->due_date }}</p>
                  <p>{{ $moke->end_date }}</p>
                  <p>{{ $moke->moke_detail }}</p>
                  <p>{{ $moke->address }}</p>
                  <p>{{ $moke->created_at }}</p>
                  <p>{{ $moke->organizer_id }}</p>
                  <p>{{ $moke->updated_at }}</p>
                  <p>{{ $moke->moke_id }}</p>
              </div>
        </div>
    </div>
@endsection