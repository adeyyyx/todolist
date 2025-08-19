@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Projects</h1>
        <a href="{{ route('projects.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
           + New Project
        </a>
    </div>

    <table class="min-w-full bg-white border rounded-lg shadow">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="py-2 px-4">No</th>
                <th class="py-2 px-4">Tugas</th>
                <th class="py-2 px-4">Deskripsi</th>
                <th class="py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr class="border-t">
                <td class="py-2 px-4">{{ $loop->iteration }}</td>
                <td class="py-2 px-4">{{ $project->name }}</td>
                <td class="py-2 px-4">{{ $project->description }}</td>
                <td class="py-2 px-4 flex gap-2">
                    <a href="{{ route('projects.edit', $project) }}"
                       class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Yakin hapus project ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
