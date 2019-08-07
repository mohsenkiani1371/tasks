@extends('layouts.master')
@section('content')
  <div class="card m-3 p-3 text-center">
    <div class="card-body">
      <a href="{{url('tasks')}}" class="btn btn-info px-3 m-2">مشاهده کارها</a>
      <a href="{{url('tasks/create')}}" class="btn btn-success px-3 m-2">تعریف کار جدید</a>
    </div>
  </div>
@endsection
