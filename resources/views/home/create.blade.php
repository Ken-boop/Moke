@extends('layouts.app')
@section('title','ホーム')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録画面</title>
</head>
<body>
    <section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('moke.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="moke_name">イベント名</label>
                        <input type="text" class="form-control" name="moke_name" id="title" />
                    </div>
                    <div class="form-group">
                        <label for="moke_detail">イベント詳細</label>
                        <input type="text" class="form-control" name="moke_detail" id="title" />
                    </div>
                    <div class="form-group">
                        <label for="due_date">開始日時</label>
                        <input type="datetime-local" class="form-control" name="due_date" id="title" />
                    </div>
                    <div class="form-group">
                        <label for="end_date">終了日時</label>
                        <input type="datetime-local" class="form-control" name="end_date" id="body"></input>
                    </div>
                    <div class="form-group">
                        <label for="address">場所</label>
                        <textarea class="form-control" name="address" id="body"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
@endsection