@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}
    </h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="" width="100" height="100" class="rounded-circle">
@endsection
    