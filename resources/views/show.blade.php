<x-layout>
    <h2>{{ $student->name }}</h2>

    <h4><a href="{{ url('/students') }}">Back to students list</a></h4>

    <a href="{{ url('/students/' . $student->id . '/edit') }}"
       style="color: white; text-decoration: none; background: cornflowerblue; padding: 4px; border: none"
    >Edit</a>

    <h3>Student info:</h3>

    <ul>
        <li>Email: {{ $student->email }}</li>
        <li>Age: {{ $student->age }}</li>
        <li>Gender: {{ $student->gender }}</li>
        <li>Class: {{ $student->class }}</li>
        <li>Created: {{ $student->created_at }}</li>
    </ul>

    <form action="" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="verwijder dit student"
               style="padding: 4px; border: none; background: red; color: white">
    </form>
</x-layout>
