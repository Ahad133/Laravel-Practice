<!-- Form for creating a new task -->
<h1>CRUD function</h1>
<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="address">Address:</label>
    <input type="text" name="address" id="address">
    <label for="number">Number:</label>
    <input type="text" name="number" id="number">
    <button type="submit">Submit</button>
</form>
<a href="{{ route('tasks.index') }}">Back to Data</a>
