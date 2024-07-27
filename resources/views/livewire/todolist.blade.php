<div class="flex justify-center">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
        <input type="text" wire:model="Task" wire:keydown.enter="addTodo" placeholder="add todo">
        @forelse ($todos as $todo)
            {{ $todo }}
        @empty
            <p>No todos yet</p>
        @endforelse
    </div>

</div>
