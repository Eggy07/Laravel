<h1>Add New Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Student Name">
    <button type="submit">Save</button>
</form>
