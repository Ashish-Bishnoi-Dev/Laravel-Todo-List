<div class="flex justify-center">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
        <input type="text" wire:model="task" wire:keydown.enter='addTodo'  placeholder="add todo">
        <button wire:click="addTodo">Add</button>
        <ul>
            @forelse ($todos as $todo)
                <li> 
                    @if ($todo->status == 'open')
                        <input type="checkbox" id="markAsDone" wire:change="markAsDone({{ $todo->id }})">
                    @endif
                    <label for="markAsDone" style="{{ ($todo->status == 'done') ? 'text-decoration: line-through' : '' }} ">{{ $todo->task }}</label>
                    @if($todo->status == "done")
                        <button wire:click="delete({{ $todo->id }})">Delete</button>
                    @endif
                </li>
            @empty
                <p>No todos yet</p>
            @endforelse
        </ul>
    </div>

</div>
