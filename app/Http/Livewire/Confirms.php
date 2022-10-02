<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Confirms extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = session()->get('posts');
        // if(empty($this->posts)){
        //     return redirect()->route('form');
        // }

        // session()->flush();
    }

    public function save()
    {
        //$posts = $this->posts;
        //dd($posts);
        Contact::create([
            'fullname' => $this->posts.last_name.''.$this->posts.first_name,
            'gender' => $this->posts.gender,
            'email' => $this->posts.email,
            'postcode' => $this->posts.postcode,
            'address' => $this->posts.address,
            'building_name' => $this->posts.building_name,
            'opinion' => $this->posts.opinion
        ]);

        // $contact = new Contact();
        // $contact->contact = $this->posts;
        // $contact->save();

        return view('livewire.thanks');
    }

    public function back()
    {
        return redirect()->route('form');
    }

    public function render()
    {
        return view('livewire.confirms');
    }
}
