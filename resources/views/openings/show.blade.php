<x-layout title="Show the details for a chess opening">
    <h1>{{ $opening->name }}</h1>

    @if($opening->eco_code)
        <p>ECO Code: {{ $opening->eco_code }}</p>
    @endif

    <p>Moves (PGN):</p>
    <pre>{{ $opening->pgn }}</pre>

    @if($opening->description)
        <p>Description: {{ $opening->description }}</p>
    @endif

    <a href="/openings/{{ $opening->id }}/edit">
        <button>Edit</button>
    </a>

    <form method="POST" action="/openings/{{ $opening->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-layout>
