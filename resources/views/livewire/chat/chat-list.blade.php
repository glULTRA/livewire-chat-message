<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="chatlist_header">
        <div class="title">
            Chat
        </div>
        <div class="img_container">
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ auth()->user()->name }}" alt="">
        </div>
    </div>

    <div class="chatlist_body">
        @if(count($conversations) > 0)
        @foreach ($conversations as $conversation)
       
        <div class="chatlist_item " wire:key='{{ $conversation->id }}'
            id='conversation-{{ $conversation->id }}'
            wire:click="$emit('chatUserSelected', {{$conversation}}, {{$this->getChatUserInstance($conversation, $name='id')}})"
            style="background-color: #1f2937">
            <div class="chatlist_img_container">

                <img src="https://ui-avatars.com/api/?name={{$this->getChatUserInstance($conversation, $name='name')}}"
                    alt="">
            </div>

            <div class="chatlist_info">
                <div class="top_row">
                    <div class="list_username"> {{$this->getChatUserInstance($conversation, $name='name')}} </div>
                    <span class="date">
                        {{$conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans()}}
                    </span>
                </div>

                <div class="bottom_row">
                    <div class="message_body text-truncate">
                        {{$conversation->messages->last()?->body}}
                    </div>

                    <div class="unread_count">
                        3
                    </div>
                </div>
            </div>
        </div>

        <script>
            
        </script>

        @endforeach
        @else
            No conversations
        @endif

    </div>

</div>