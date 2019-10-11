@extends('layouts.app')
@section('tytle', 'イベント投稿')

@section('content')
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('moke.create') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="moke_name">イベント名</label>
                    <input type="text" class="form-control" name="moke_name" id="moke_name"/>
                </div>
                <div class="form-group">
                    <label for="address">イベント開催場所</label>
                    <input type="text" class="form-control" name="address" id="address"/>
                </div>
                <div class="form-group">
                    <label for="due_date">イベント開始時刻</label>
                    <input type="datetime-local" class="form-control" name="due_date" id="due_date"/>
                </div>
                <div class="form-group">
                    <label for="end_date">イベント終了時刻</label>
                    <input type="datetime-local" class="form-control" name="end_date" id="end_date"/>
                </div>
                <div class="form-group">
                    <label for="moke_detail">コメント</label>
                    <textarea class="form-control" name="moke_detail" id="moke_detail"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection('content')