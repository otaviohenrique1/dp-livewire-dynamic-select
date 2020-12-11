    <div class="container">
        <h2>Novo Livro</h2>
        <form wire:submit.prevent="create" >
            <label for="title">Título</label> <br>
            <input wire:model="title" type="text" id="title" class="mb"> <br>

            <div class="input-clear">
                <label for="title">Autor</label> <br>
                <input wire:model="search" type="text">
                <span wire:click="clear" class="clear-button">&#x2715</span>
            </div>
            <ul style="display: {{ $showList }};">
                @foreach($users as $user)
                    <li wire:click="selectedUser({{$user}})">{{ $user->name }}</li>
                @endforeach
            </ul>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
