@props(['heading'])
<section class="py-8 max-w-md mx-auto">
    <h1 class="text-lg font-bold mb-4 text-center">
        {{$heading}}
    </h1>
    <form method="POST" action="/admin/posts" enctype="multipart/form-data">
        @csrf
        <div class="bg-gray-100 border border-gray-200 px-6 py-8 rounded-xl">
            <x-form.input name="title" type="text" ></x-form.input>
            <x-form.textarea name="slug" ></x-form.textarea>
            <x-form.input name="thumbnail" type="file" ></x-form.input>
            <x-form.textarea name="excert" ></x-form.textarea>
            <x-form.textarea name="body" ></x-form.textarea>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id" >
                    @foreach(App\Models\Category::all() as $category)
                        <option value="{{$category->id}}" {{old('category_id') == $category->id ? "selected" : ""}}>{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
                @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Publish
                </button>
            </div>
        </div>
    </form>
</section>
