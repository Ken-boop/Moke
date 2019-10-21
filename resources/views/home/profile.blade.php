@extends('layouts.app')
@section('tytle', 'プロフィール画面')

@section('content')
<div class="form-group row">
　<label for="picture" class="col-md-4 col-form-label text-md-right">プロフィール写真</label>
    <div class="col-md-6">
      <input id="picture" type="file" name="picture" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}">
        @if ($errors->has('picture'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('picture') }}</strong>
            </span>
        @endif
    </div>
</div>

<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('profile.show') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" class="form-control" name="moke_name" id="moke_name"/>
                </div>
                <div class="form-group">
                    <label for="gender">性別</label>
                    <input type="text" class="form-control" name="address" id="address"/>
                </div>
                <div class="form-group">
                    <label for="age">年齢</label>
                    <input type="text" class="form-control" name="due_date" id="due_date"/>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="text" class="form-control" name="end_date" id="end_date"/>
                </div>
                <div class="form-group">
                    <label for="introduction">自己紹介</label>
                    <textarea class="form-control" name="moke_detail" id="moke_detail"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection('content')