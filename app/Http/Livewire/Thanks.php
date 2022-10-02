<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Thanks extends Component
{
    public $posts;

    public function mount()
    {
        if(empty(session()->get('posts'))){
            return redirect()->route('form');
        }

        session()->flush();
    }

    public function render()
    {
        return view('livewire.thanks');
    }
}
