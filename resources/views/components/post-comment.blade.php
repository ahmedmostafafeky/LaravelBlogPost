@props(['comment'])

<article class="space-x-4 flex bg-gray-100 p-6 border border-gray-200 rounded-xl">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/50?u={{$comment->user_id}}" width="50" alt="" class="border rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">
                Posted
                <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
            </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
