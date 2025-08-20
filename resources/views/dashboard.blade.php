@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-700">Dashboard</h1>
    <p class="mt-2 text-gray-600">Selamat datang di Todolist</p>
    <form method="POST" action="/logout">
    @csrf
    <button class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
</form>

</div>
@endsection
