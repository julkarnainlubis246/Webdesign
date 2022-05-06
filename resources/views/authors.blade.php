
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Author</h1>
@foreach ($authors as $author)

<ul>
    <li>
        <h2><a href="/authors/{{ $author->slug }}">{{ $author->name }}</a></h2>
    </li>
</ul>



@endforeach

@endsection


