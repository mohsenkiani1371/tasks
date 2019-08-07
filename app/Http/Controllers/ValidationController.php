<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public static function validateTask ($id=0)
    {
      return request()->validate([
        "name" => "required|string|between:4,100|unique:tasks,name,$id",
        "date" => "nullable|date"
      ]);
    }
}
