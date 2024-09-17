<div>
    <h1> Edit {{ $student->name }}</h1>

    <a href="{{ url('/students/' . $student->id) }}">terug</a>

    <br><br>

    <form action="{{ url('/students/' . $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">
            Name:
            <input type="text" name="name" id="name" value="{{ $student->name }}">
        </label>
        @error('name')
        <span style="background: red; color: white; border-radius: 4px">{{ $message }}</span>
        @enderror

        <br>

        <label for="email">
            Email:
            <input type="text" name="email" id="email" value="{{ $student->email }}">
        </label>
        @error('email')
        <span style="background: red; color: white; border-radius: 4px">{{ $message }}</span>
        @enderror

        <br><br>

        <button type="submit" style="background: green; color: white; border: 1px greenyellow; padding: 4px"
        >Update
        </button>
    </form>
</div>
