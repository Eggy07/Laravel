<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="name" value="{{ $student->name }}">
    <button type="submit">Update</button>
</form>
