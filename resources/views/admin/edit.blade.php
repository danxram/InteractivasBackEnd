@extends('admin.app')

@section('content')
    <h2 class="text-3xl font-bold mb-4">Edit Event</h2>
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="font-semibold block">Category</label>
            <select name="categories_id" class="border p-2 w-full" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $event->categories_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="font-semibold block">Name</label>
            <input type="text" name="name" class="border p-2 w-full" value="{{ $event->name }}" required>
        </div>
        <div class="mb-4">
            <label class="font-semibold block">Image URL</label>
            <input type="url" name="image" class="border p-2 w-full" value="{{ $event->image }}">
        </div>
        <div class="mb-4">
            <label class="font-semibold block">Date</label>
            <input type="date" name="date" class="border p-2 w-full" value="{{ $event->date }}" required>
        </div>
        <div class="mb-4">
            <label class="font-semibold block">Time</label>
            <input type="time" name="time" class="border p-2 w-full" value="{{ $event->time }}" required>
        </div>
        <div class="mb-4">
            <label class="font-semibold block">Description</label>
            <textarea name="description" class="border p-2 w-full" required>{{ $event->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="font-semibold block">Status</label>
            <select name="status" class="border p-2 w-full" required>
                <option value="1" {{ $event->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$event->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="text-xl bg-blue-500 text-white px-4 py-2 rounded">Update Event</button>
    </form>
@endsection