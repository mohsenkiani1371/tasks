@extends('layouts.master')
@section('content')
@include('fragments.delete_confirmation')
<table class="table table-bordered table-hover">
<thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">نام کار</th>
    <th scope="col">تاریخ تعریف</th>
    <th scope="col">موعد انجام</th>
    <th scope="col">انجام شده</th>
    <th scope="col" colspan="4">عملیات</th>
  </tr>
</thead>
<tbody>
  @foreach ($tasks as $key=>$task)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$task->name}}</td>
      <td>{{$task->created_at}}</td>
      <td>{{$task->date ?? '-'}}</td>
      <td class="task-done" data-task-id="{{$task->id}}">
        @if ($task->done)
        <span class="text-success">بله &check;</span>
        @else
        <span class="text-danger">خیر &cross;</span>
        @endif
      </td>
      <td> <a href={{url("tasks/$task->id")}}>مشاهده</a> </td>
      <td> <a href={{url("tasks/$task->id/edit")}}>ویرایش</a> </td>
      <td class="mark-task" data-task-id="{{$task->id}}">
        @if ($task->done)
          <a onclick="changeStatus({{$task->id}})" class="btn btn-danger mark-as-not-done">
            تغییر به وضعیت انجام نشده &cross;</a>
        @else
          <a onclick="changeStatus({{$task->id}})" class="btn btn-success mark-as-done">
            تغییر به وضعیت انجام شده &check;</a>
        @endif
      </td>
      <td>
        <form class="danger" action={{url("tasks/$task->id")}} method="post" id="task-{{$task->id}}">
          @csrf
          {{method_field("DELETE")}}
          <button type="button" class="btn btn-link" data-id="{{$task->id}}">حذف</button>
        </form>
      </td>
    </tr>
  @endforeach
</tbody>
</table>
{{$tasks->links()}}
@endsection
