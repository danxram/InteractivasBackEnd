@extends('admin.app')

@section('content')
    <h2 class="text-xl mb-4">Events</h2>
    <a href="{{ route('events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Event</a>
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif
    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="py-2">Name</th>
                <th class="py-2">Category</th>
                <th class="py-2">Image</th>
                <th class="py-2">Date</th>
                <th class="py-2">Time</th>
                <th class="py-2">Description</th>
                <th class="py-2">Status</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td class="border px-4 py-2">{{ $event->name }}</td>
                    <td class="border px-4 py-2">{{ $event->category->name }}</td>
                    <td class="border px-4 py-2"><img src="{{ $event->image }}" alt="{{ $event->name }}" class="w-16 h-16"></td>
                    <td class="border px-4 py-2">{{ $event->date }}</td>
                    <td class="border px-4 py-2">{{ $event->time }}</td>
                    <td class="border px-4 py-2">{{ $event->description }}</td>
                    <td class="border px-4 py-2">{{ $event->status ? 'Active' : 'Inactive' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('events.edit', $event->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection