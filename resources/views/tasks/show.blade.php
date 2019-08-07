@extends('layouts.master')
@section('content')
<div class="card text-white bg-info mb-3">
  <div class="card-header">{{$t->id}}</div>
  <div class="card-body">
    <h5 class="card-title">{{$t->name}}</h5>
    <p class="card-text">
      زمان ایجاد: {{$t->created_at ?? '-'}}
      <br>
      موعد انجام: {{$t->date ?? '-'}}
      <br>
      وضعیت: {{$t->done ? 'انجام شده' : 'انجام نشده'}}
    </p>
  </div>
  <div class="card-footer">
    <a href="{{url('tasks')}}" class="btn btn-light">بازگشت</a>
  </div>
</div>
@endsection
