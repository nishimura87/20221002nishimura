<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contacts extends Component
{
    public $state = [];
    public $posts;

    public function mount()
    {
        $this->posts = session()->get('posts');
    }

    protected array $rules = [
        'posts.last_name' => 'required',
        'posts.first_name' => 'required',
        'posts.email' => 'required|email',
        'posts.postcode' => 'required|regex:/\A\d{3}[-]\d{4}\z/',
        'posts.address' => 'required',
        'posts.opinion' => 'required|Max:120',
    ];

    protected $messages = [
        'posts.last_name.required' => '苗字を入力してください。',
        'posts.first_name.required' => '名前を入力してください。',
        'posts.email.required' => '必須項目に入力してください。',
        'posts.email.email' => 'メールアドレスを入力してください。',
        'posts.postcode.required' => '郵便番号を入力してください。',
        'posts.postcode.regex' => '郵便番号はハイフンあり半角8文字で入力してください。',
        'posts.address.required' => '住所を入力してください。',
        'posts.opinion.required' => 'ご意見を入力してください。',
        'posts.opinion.Max:120' => '120文字以内で入力してください。',
    ];

    public function confirm()
    {
        $this->validate();

        session()->put('posts', $this->posts);
        return redirect()->route('confirms');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}