<?php

namespace manzur\ahammed;

use manzur\ahammed\Todo;
use App\Http\Controllers\Controller;

class TodoControlller extends Controller
{
    public function index(){
		$todo = $this->getlist();
		return view('todo::todo-list')->with('todo',$todo);
	}
	
	public function getlist(){
		return Todo::all();
	}
}
