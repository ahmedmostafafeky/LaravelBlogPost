
<x-layout>
    <x-slot name="content">
        <section class="px-6 py-8">
            <h1 class="text-lg font-bold mb-4 text-center">this is my dashboard ready</h1>
            <!-- component -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                @foreach($posts as $post)
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$post->title}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a class="text-green-500 hover:text-green-600" href="/posts/{{$post->slug}}" >Go To {{$post->title}}</a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a class="text-blue-400 hover:text-blue-600" href="/admin/{{$post->id}}/edit" >Edit</a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form method="POST" action="/admin/{{$post->id}}/delete">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-400 hover:text-red-600">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
