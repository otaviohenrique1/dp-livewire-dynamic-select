<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\User;
class BookComponent extends Component
{
    public $users = [];
    public $showList = 'none';
    public $search = '';
    public $title = '';
    public $user_id = '';

    public function updatedSearch() {
        $this->showList = 'block';
        $this->users = User::where("name", "like", "%{$this->search}%")->get();
    }

    public function selectedUser($user) {
        $this->user_id = $user['id'];
        $this->search = $user['name'];
        $this->showList = 'none';
    }

    public function clear() {
        $this->user_id = null;
        $this->search = '';
        $this->showList = 'none';
    }

    public function create() {
        // if(!$this->user_id) {
        //     // retorna um erro
        // }

        // $this->validate([
        //     'title' => 'required'
        // ]);

        Book::create([
            'title' => $this->title,
            'user_id' => $this->user_id
        ]);

        return redirect()->to(route('books.list'));
    }

    public function render()
    {
        return view('livewire.book-component');
    }
}
