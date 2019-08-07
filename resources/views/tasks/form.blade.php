@extends('layouts.master')
@section('content')
  @include('fragments.errors')
  <form class="row" action={{url("tasks/$t->id")}} method="post">
    @csrf
    @if ($t->id)
      {{method_field("PUT")}}
    @endif
    <div class="col-md-3"></div>
    <div class="col-md-3">
      <label for="name">نام کار</label>
      <input type="text" class="form-control" name="name" value="{{$t->name ?? old('name')}}">
    </div>
    <div class="col-md-3">
      <label for="date">تاریخ</label>
      <input type="date" class="form-control" name="date" value="{{$t->date ?? old('date')}}">
    </div>
    <div class="col-md-3"></div>

    <div class="col-md-5"></div>
    <div class="col-md-2 mt-3">
      <button type="submit" name="button" class="btn btn-primary btn-block">ثبت</button>
    </div>
  </form>
  <a href="{{url('tasks')}}" class="btn btn-light">بازگشت</a>
@endsection
