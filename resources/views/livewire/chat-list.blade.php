<div>
    <h2 class="text-center message-title">Mensajes</h2>
    <div class="card">
        <ul class="card-body">
            @foreach ($messages as $message)
            <div>
                    @if($displayMessage)
                        <div class="alert alert-primary" style="margin-right: 50px;">
                            <strong>{{$message["username"]}}</strong><small class="float-end">{{ floor(\Carbon\Carbon::parse($message['created_at'])->diffInMinutes(now())) }} min ago</small>
                            <br><span class="text-muted">{{$message["message"]}}</span>
                        </div>
                    @else
                        <div class="alert alert-success" style="margin-left: 50px;">
                            <strong>{{$message["username"]}}</strong><small class="float-end">{{ floor(\Carbon\Carbon::parse($message['created_at'])->diffInMinutes(now())) }} min ago</small>
                            <br><span class="text-muted">{{$message["message"]}}</span>
                        </div>
                    @endif
                </div>        
            @endforeach
        </ul>
    </div>
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
            Livewire.dispatch('messageSent', {
                data
            });
        });
    });
</script>