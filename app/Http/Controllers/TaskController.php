<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
  public function index()
  {
    $tasks = Task::paginate(10);
    return view('tasks.index', compact('tasks'));
  }

  public function show(Task $t)
  {
    return view('tasks.show', compact('t'));
  }

  public function create(){
    $t = new Task;
    return view('tasks.form', compact('t'));
  }

  public function store()
  {
    $data = ValidationController::validateTask();
    Task::create($data);
    HelperController::flash();
    return redirect("tasks");
  }

  public function edit(Task $t)
  {
    return view('tasks.form', compact('t'));
  }

  public function update(Task $t)
  {
    $data = ValidationController::validateTask($t->id);
    $t->update($data);
    HelperController::message("کار مورد نظر ویرایش شد.");
    return back();
  }

  public function destroy(Task $t)
  {
    $t->delete();
    HelperController::flash_delete_message();
    return redirect("tasks");
  }
}
