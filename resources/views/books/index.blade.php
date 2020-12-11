<html>
<head>
    <style>
        body {
            height: 100vh;
            display: flex;
        }

        ul {
            width: 100%;
            margin-top: 0;
            overflow-x: hidden;
            height: 200px;
            padding-left: 0;
            background-color: #f3f3f3;
            padding: 8px 0;
        }

        ul li {
            list-style: none;
            padding: 8px;
            width: 100%;
        }

        ul li:hover {
            background-color: #ccc;
        }

        .container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    </style>
    @livewireStyles
</head>
<body>
    <div class="container">
        <h2>Lista de Livros</h2>
        <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} <small>( Autor - {{ $book->user->name }} )</small></li>
        @endforeach
        </ul>
    </div>
    @livewireScripts
</body>
</html>
