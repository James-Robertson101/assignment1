<x-layout title="Edit a Chess Opening">
    <x-slot:styles>
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" />
    </x-slot:styles>
    <div class="formContainer">
    <form class = 'Form' action="/openings/{{ $opening->id }}" method="POST">
        @csrf
        @method('PATCH')
        <h1 class="formTitle">Edit the details for {{ $opening->name }}</h1>
        <input type="hidden" name="id" value="{{ $opening->id }}">

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $opening->name }}" required>
        </div>

        <div>
            <label for="eco_code">ECO Code:</label>
            <input type="text" id="eco_code" name="eco_code" value="{{ $opening->eco_code }}" placeholder="e.g., C60">
        </div>

        <div>
            <label for="pgn">Moves (PGN):</label>
            <textarea id="pgn" name="pgn" rows="5" required>{{ $opening->pgn }}</textarea>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="3">{{ $opening->description }}</textarea>
        </div>

        <div>
            <button type="submit">Save Changes</button>
        </div>
    </form>
    </div>
</x-layout>
