<div>
    <h2 class="text-center message-title">Mensajes</h2>
    <ul class="list-group">
        @foreach ($messages as $message)
        <li class="list-group-item">{{ $message['username']}}: {{ $message['message']}} </li>
        @endforeach
    </ul>
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('4f0e75cc6e4f44a32760', {
            cluster: 'us2'
        });

        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
            Livewire.dispatch('messageSent', {data});
        });
    });
</script>