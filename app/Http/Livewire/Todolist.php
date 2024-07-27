<?php

namespace App\Http\Livewire;
use App\Models\Todo;

use Livewire\Component;

class Todolist extends Component
{

    public $todos;
    public $task = '';

    function mount(){
        $this->fetchTodos();
    }

    function fetchTodos(){
        $this->todos = Todo::all()->reverse();
    }

    function addTodo(){
        if($this->task != ''){
            $todo = new Todo();
            $todo->task = $this->task;
            $todo->save();
            $this->task = '';
        }
    }

    public function render()
    {
        return view('livewire.todolist');
    }
}
