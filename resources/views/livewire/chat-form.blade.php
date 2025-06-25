<div>
    <div class="alert alert-success d-none" id="alert-chat" wire:ignore>
        <p wire:ignore class="p-0 m-0" id="alert-chat-message"></p>
    </div>
    <div>
        <div class="form-group mb-2">
            <label for="search">Nombre</label>
            <input class="form-control" type="text" name="search" placeholder="Buscar usuario..." wire:model.live.debounce.500ms="search" id="search">
            @error('search') 
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" wire:model.live.debounce.500ms="message" class="form-control"></textarea>
            @error('message') 
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-primary" wire:click="sendMessage">Enviar</button>
    </div>
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('messageSent', (message) => {
            let chat = document.getElementById('alert-chat');
            document.getElementById('alert-chat-message').innerText = "Mensaje enviado exitosamente";
            chat.classList.remove('d-none');
            setTimeout(() => {
                chat.classList.add('d-none');
            }, 3000);
        });
    });
</script>