@extends('layout.general')

@section('content')
    <div class="card col-md-6 mx-auto mt-5 shadow">
        <div class="card-header">
            <h2>Chat</h2>
        </div>
        <div class="card-body">
            @livewire('chat-form')
            @livewire('chat-list')
        </div>
    </div>
@endsection
