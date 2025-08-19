@extends('layouts.app')

@section('content')
<div class="p-6 max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Project</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-gray-700">Judul Tugas</label>
            <input type="text" name="name" value="{{ $project->name }}" class="w-full border rounded-lg p-2" required>
        </div>

        <div>
            <label class="block text-gray-700">Deskripsi</label>
            <textarea name="description" class="w-full border rounded-lg p-2" rows="4">{{ $project->description }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
            Update
        </button>
    </form>
</div>
@endsection
