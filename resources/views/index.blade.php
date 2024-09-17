<x-layout>
    <h2>Students page</h2>

        <a href="{{ url('/students/create') }}">Maak nieuwe student aan</a>

        <br><br>

        @foreach($students as $student)
            <a href="{{ url('/students/' . $student->id) }}">{{ $student->name }}</a>
            <br>
    @endforeach
</x-layout>
