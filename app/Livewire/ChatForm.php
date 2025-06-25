<?php

namespace App\Livewire;

use App\Events\SentMessage;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ChatForm extends Component
{
    public $search;
    public $message;

    public function mount()
    {
        $this->search = '';
        $this->message = '';
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'search' => 'required|min:3',
            'message' => 'required',
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'search' => 'required|min:3',
            'message' => 'required',
        ]);

        //$this->dispatch('messageSent', ['username' => $this->search, 'message' => $this->message]);
        event(new SentMessage($this->message, $this->search));
        Log::info('Método sendMessage ejecutado');
        $this->search = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chat-form');
    }
}
