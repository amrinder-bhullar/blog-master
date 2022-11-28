@props(['name', 'category_id'])

<div class="mb-4">
    <label for="category_id" class="block mb-2 font-bold text-xs text-gray-700">Select a category</label>
    <select name="{{ $name }}" id="{{ $name }}">

        @foreach (\App\Models\Category::all() as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ ucwords($category->name) }}</option>
        @endforeach
    </select>
</div>

<x-form.error name="{{ $name }}" />
