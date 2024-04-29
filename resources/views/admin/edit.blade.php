<x-layout>
    <x-slot name="content">
        <section class="px-6 py-8">
            <h1 class="text-lg font-bold mb-4 text-center">Edit post: {{$post->title}}</h1>

            <form method="POST" action="/admin/{{$post->id}}">
                @csrf
                @method('PATCH')
                <div class="bg-gray-100 border border-gray-200 px-6 py-8 rounded-xl">
                    <x-form.textarea name="body" value="{{$post->body}}"  ></x-form.textarea>
                    <x-form.textarea name="slug" value="{{$post->slug}}" ></x-form.textarea>

                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </x-slot>
</x-layout>
