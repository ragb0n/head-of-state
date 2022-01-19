<div class="media">
    <div class="media-body">
        @if($message->user->id == Auth::id())
            <div class="text-right bg-red-100 rounded-l-lg mb-5 pr-5 pt-2 pb-2 ">
                <small class="media-heading"><span class="font-bold">{{ $message->user->username }}</span> - {{ $message->created_at->diffForHumans() }}</small>
            <p>{{ $message->body }}</p>
        @else
            <div class="text-left bg-red-500 rounded-r-lg mb-5 pl-5 pt-2 pb-2 ">
                <small class="media-heading"><span class="font-bold">{{ $message->user->username }}</span> - {{ $message->created_at->diffForHumans() }}</small>
            <p>{{ $message->body }}</p>
        </div>
         @endif              
    </div>
</div>