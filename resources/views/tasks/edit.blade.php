<!-- Form for editing a task -->
<h1>Edit</h1>
<form action="{{ route('tasks.update', $task->id) }}" method="post">
    @csrf
    @method('put')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $task->name }}">
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="{{ $task->address }}">
    <label for="number">Number:</label>
    <input type="text" name="number" id="number" value="{{ $task->number }}">
    <button type="submit">Update</button>
</form>
<a href="{{ route('tasks.index') }}">Back to Data</a>
