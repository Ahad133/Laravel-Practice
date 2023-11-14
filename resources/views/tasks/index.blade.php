<!-- Display a list of tasks -->
<h1>Data</h1>
<a href="{{ route('tasks.create') }}">Create New</a>
<ul>
    @foreach($tasks as $task)
        <li>
            {{ $task->name }} - {{ $task->address }} - {{ $task->number }}
            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>

            <!-- Add delete form -->
            <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display:inline;">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
