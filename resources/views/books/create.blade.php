<html>
<head>
    <style>
        body {
            height: 100vh;
            display: flex;
        }

        input {
            width: 100%;
            height: 4em;
            padding: 8px;
        }

        .mb {
            margin-bottom: 24px;
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

        .container form {
            width: 100% !important;
        }

        .input-clear {
            position: relative;
        }

        .clear-button {
            position: absolute;
            right: 24px;
            top: 32px;
            font-size: 16px;
            cursor: pointer;
        }

        .clear-button:hover {
            color: red;
        }

    </style>
    @livewireStyles
</head>
<body>
    <div class="container">
        <form>
            <label for="title">Título</label> <br>
            <input type="text" id="title" class="mb"> <br>

            <div class="input-clear">
                <label for="title">Autor</label> <br>
                <input type="text">
                <span class="clear-button">&#x2715</span>
            </div>
            <ul>
                <li>Thiago</li>
                <li>Luiz</li>
                <li>Leonan</li>
                <li>Wesley</li>
                <li>Manuella</li>
                <li>Alfredo</li>
                <li>Regina</li>
                <li>Candido</li>
                <li>Rafael</li>
                <li>Samira</li>
            </ul>
        </form>
    </div>
    @livewireScripts
</body>
</html>
