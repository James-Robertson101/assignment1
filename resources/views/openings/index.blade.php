<x-layout title="List the openings">
    <h1>Here's a list of Openings</h1>
    @foreach ($openings as $opening)
    <p>
        <a href="/openings/{{$opening->id}}">
            {{$opening->name}}
        </a>
    </p>
    @endforeach
</x-layout>