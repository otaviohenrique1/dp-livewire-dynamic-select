@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Lista de Livros</h2>
        <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} <small>( Autor - {{ $book->user->name }} )</small></li>
        @endforeach
        </ul>
    </div>

@endsection
