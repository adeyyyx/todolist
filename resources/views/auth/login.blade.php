<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" action="/login" class="bg-white p-6 rounded-lg shadow-lg w-96">
        @csrf
        <h1 class="text-2xl font-bold mb-4">Login</h1>

        <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded mb-3">
        <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded mb-3">

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>

        <p class="mt-3 text-sm">Belum punya akun? <a href="/register" class="text-blue-500">Register</a></p>
    </form>
</body>
</html>
