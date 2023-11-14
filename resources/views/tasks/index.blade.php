<h1>Data</h1>
<a href="{{ route('tasks.create') }}">Create New</a>
<ul>
    @foreach($tasks as $task)
        <li>
            {{ $task->name }} - {{ $task->address }} - {{ $task->number }}
            <form action="{{ route('tasks.edit', $task->id) }}" method="get" style="display: inline;">
                @csrf
                <button type="submit">Edit</button>
            </form>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete?')">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>