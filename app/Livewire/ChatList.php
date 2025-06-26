<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Component;

class ChatList extends Component
{
    public $messages;
    public $displayMessage;

    protected $listeners = ['messageSent'=> 'messageSent'];

    public function mount(){
        $this->messages = [];
        $this->displayMessage = false;
    }

    public function messageSent($data){
        // $data debe contener ['username', 'message', 'received']
        $this->messages = Chat::getChats();
    }


    public function render()
    {
        return view('livewire.chat-list');
    }
}
