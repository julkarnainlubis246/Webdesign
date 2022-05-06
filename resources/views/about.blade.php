
@extends('layouts.main')

@section('container')
<center>
    <h1>About Me</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="150">
</center>  
@endsection
