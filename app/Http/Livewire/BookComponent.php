<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\User;
class BookComponent extends Component
{
    public function create() {
        Book::create([
            'title' => 'Book Title',
            'user_id' => 3
        ]);

        return redirect()->to(route('books.list'));
    }

    public function render()
    {
        return view('livewire.book-component');
    }
}
