<x-layout>
    <x-slot name="content">
        @include('posts._header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count())
                <x-posts-grid :posts="$posts"/>
                {{$posts->links()}}
            @else
                <p>There Is No Posts Yet, Please Check Back Later</p>
            @endif

        </main>
    </x-slot>
</x-layout>
