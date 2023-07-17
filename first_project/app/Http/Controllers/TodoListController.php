<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function getTodoList(){
        $toDoList = TodoList::find(1);
        dump($toDoList->nameOfTask);
        dump($toDoList->isCompleted);
    }
}
