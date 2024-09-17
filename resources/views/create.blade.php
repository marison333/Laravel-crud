<x-layout>
    <div class="container"
         style="margin: 30vh 50%; width: 50vh">

        <div class="top">
            <h1>Student formulier</h1>
            <a href="{{ url('/students') }}">Terug</a>
        </div>

        <br>

        <div class="student-form">
            <form method="POST" action="{{ url('/students') }}">
                @csrf

                <div>
                    <label for="name">
                        Naam:<span style="color: red">*</span>
                        <input name="name" id="name" placeholder="Naam.." value="{{ old('name') }}">
                    </label>

                    <br>

                    @error('name')
                    <span style="background: red; color: white; border-radius: 4px">{{ $message }}</span>
                    @enderror
                </div>

                <br>

                <div>
                    <label for="email">
                        Email:<span style="color: red">*</span>
                        <input name="email" id="email" placeholder="email.." value="{{ old('email') }}">
                    </label>

                    <br>

                    @error('email')
                    <span style="background: red; color: white; border-radius: 4px">{{ $message }}</span>
                    @enderror
                </div>

                <br>

                <div>
                    <label for="age">
                        Age:<span style="color: red">*</span>
                        <input type="number" name="age" id="age" placeholder="age.." value="{{ old('age') }}">
                    </label>

                    <br>

                    @error('age')
                    <span style="background: red; color: white; border-radius: 4px">{{ $message }}</span>
                    @enderror
                </div>

                <br>

                <div>
                    <label for="gender">
                        Gender:<span style="color: red">*</span>
                        <input name="gender" id="gender" placeholder="gender.." value="{{ old('gender') }}">
                    </label>

                    <br>

                    @error('gender')
                    <span style="background: red; color: white; border-radius: 4px">{{ $message }}</span>
                    @enderror
                </div>

                <br>

                <div>
                    <label for="class">
                        Class:<span style="color: red">*</span>
                        <input name="class" id="class" placeholder="class.." value="{{ old('class') }}">
                    </label>

                    <br>

                    @error('class')
                    <span style="background: red; color: white; border-radius: 4px">{{ $message }}</span>
                    @enderror
                </div>

                <br>

                <div>
                    <button
                        type="submit" style="background: green; color: white; border: 1px greenyellow; padding: 4px"
                    >Verzenden
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
