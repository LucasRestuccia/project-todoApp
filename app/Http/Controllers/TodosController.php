<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = todos::all();
        $data = compact('todos');
        return view("welcome")->with($data);
    }
}
