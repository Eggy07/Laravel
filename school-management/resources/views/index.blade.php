<h1>All Students</h1>
<a href="{{ route('students.create') }}">Add Student</a>
<ul>
@foreach ($students as $student)
    <li>{{ $student->name }} - <a href="{{ route('students.edit', $student->id) }}">Edit</a></li>
@endforeach
</ul>
