<?php

namespace App\Livewire;

use Livewire\Component;

class ChatList extends Component
{
    public $messages;

    protected $listeners = ['messageSent'];

    public function mount(){
        $this->messages = [];
    }

    public function messageSent($data){
        $this->messages[] = $data;
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
