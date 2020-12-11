    <div class="container">
        <h2>Novo Livro</h2>
        <form wire:submit.prevent="create" >
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

            <button type="submit">Cadastrar</button>
        </form>
    </div>
