<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg h-screen sticky top-0 flex flex-col">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-bold text-gray-700">To Do List</h2>
        </div>
        <nav class="flex-1 px-4 py-6">
            <ul class="space-y-3">
                <li>
                    <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-200 text-gray-700 font-medium">
                        <!-- Heroicon: Chart Bar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m-6 0H5a2 2 0 01-2-2V7a2 2 0 012-2h2m4 12h6a2 2 0 002-2V9a2 2 0 00-2-2h-2" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/projects') }}" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-200 text-gray-700 font-medium">
                        <!-- Heroicon: Folder -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h4l2-2h6l2 2h4v12H3V7z" />
                        </svg>
                        Projects
                    </a>
                </li>
                <li>
                    <a href="{{ url('/tasks') }}" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-gray-200 text-gray-700 font-medium">
                        <!-- Heroicon: Check Circle -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                        </svg>
                        Tasks
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
     <div class="flex-1 flex flex-col min-h-screen">
        @include('layouts.header')

        <main class="flex-1 p-6">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>
</body>
</html>
