<x-layout>
    <x-slot name="content">
        <section class="px-6 py-8">
            <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5 lg:flex">
                        <div class="flex-1 lg:mr-8">
                            <img src="{{($post->thumbnail != null)? asset('storage/' . $post->thumbnail) : "/images/illustration-1.png"}}" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="flex-1 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <x-category-button :category="$post->category"/>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        <a href="/posts/{{$post->slug}}">
                                            {{$post->title}}
                                        </a>
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$post->created_at->diffForHumans()}}</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-2">
                                <p>
                                    {{$post->body}}
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold" ><a href="/?author={{$post->author->username}}">{{$post->author->name}}</a></h5>
                                    </div>
                                </div>
                                <div class="lg:block">
                                    <a href="/"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >Go Back</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                    <section class="col-span-8 col-start-5 mt-10 space-y-6">

                        @auth
                            <form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 rounded-xl px-4 py-4">
                                @csrf
                                <header class="flex items-center m-4">
                                    <img src="https://i.pravatar.cc/30?u={{auth()->id()}}" width="30" alt="" class="rounded_full">
                                    <h2 class="mx-4 my-4">Want To participate?..</h2>
                                </header>
                                <div class="mt-6">
                                    <textarea
                                        class="w-full text-sm focus:outline-none focus:ring"
                                        name="body"
                                        id=""
                                        cols="30"
                                        rows="5"
                                        placeholder="Say Something!"
                                        required
                                    ></textarea>
                                    @error('body')
                                        <span class="text-xs text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="flex justify-end border-t border-gray-300 pt-6">
                                    <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 border rounded-2xl mt-3 hover:bg-blue-400"  type="submit">
                                        Post
                                    </button>
                                </div>
                            </form>
                        @else
                            <p class="font-semibold">
                                <a href="/register" class="hover:underline">
                                    Register
                                </a>
                                Or
                                <a href="/login" class="hover:underline">
                                    Log In
                                </a>
                                To Leave A Comment
                            </p>
                        @endauth



                        @foreach($post->comments as $comment)
                            <x-post-comment  :comment="$comment"/>
                        @endforeach
                    </section>
                </article>
            </main>
        </section>
    </x-slot>
</x-layout>
