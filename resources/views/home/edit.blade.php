@extends('layouts.app')
@section('title','イベント編集')

@section('content')
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('moke.update' , ['moke'=>$moke->moke_id] )}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="moke_name">イベント名</label>
                    <input type="text" class="form-control" name="moke_name" id="moke_name" value="{{old('moke_name',$moke->moke_name)}}">
                </div>
                <div class="form-group">
                    <label for="moke_detail">詳細</label>
                    <textarea class="form-control" name="moke_detail" id="moke_detail">{{old('moke_detail',$moke->moke_detail)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="due_date">開始時刻</label>
                    <input type="datetime-local" class="form-control" name="due_date" id="due_date" value="{{old('due_date',$moke->due_date)}}">
                </div>
                <div class="form-group">
                    <label for="end_date">終了時刻</label>
                    <input type="datetime-local" class="form-control" name="end_date" id="end_date" value="{{old('end_date',$moke->end_date)}}">
                </div>
                <div class="form-group">
                    <label for="address">場所</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{old('address',$moke->address)}}">
                </div>
                                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
