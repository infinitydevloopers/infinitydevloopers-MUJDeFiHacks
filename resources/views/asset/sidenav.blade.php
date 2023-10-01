<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* CSS for Mobile Sidebar Toggle */
        @media (max-width: 640px) {
            .sidebar-hidden {
                left: -64px; /* Adjust the width of your sidebar */
                transition: left 0.3s ease;
            }
            .sidebar-show {
                left: 0;
                transition: left 0.3s ease;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-indigo-300 shadow-md fixed inset-y-0 left-0 z-50 transform transition-transform duration-300 ease-in-out sidebar-hidden">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Dashboard</h1>
            </div>
            <nav class="px-4">
                <ul class="space-y-4">
                    <li>
                        <a href="{{route('borrower')}}" class="block px-4 py-2 rounded-md hover:bg-gray-200">
                            Borrow Details
                        </a>
                    </li>
                    <li>
                        <a href="{{route('lender')}}" class="block px-4 py-2 rounded-md hover:bg-gray-200">
                            Lender Details
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">
                            Transaction
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">
                            Request for Borrowing or Lend Money
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home')}}" class="block px-4 py-2 rounded-md hover:bg-gray-200">
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Mobile Sidebar Toggle Button -->
        <div class="fixed inset-0 z-40 bg-black opacity-50 hidden sidebar-toggle"></div>

        <!-- Main content -->
        <div class="flex-1 ml-64"> <!-- Adjust left margin to match sidebar width -->
            <!-- Mobile Sidebar Toggle Button -->
            <button onclick="toggleSidebar()" class="block md:hidden p-4 absolute top-4 left-4 z-50">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>

@yield('sidepage')

              <script>
        // JavaScript function to toggle the sidebar
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar-hidden');
            const overlay = document.querySelector('.sidebar-toggle');
            sidebar.classList.toggle('sidebar-show');
            overlay.classList.toggle('hidden');
        }
    </script>
</body>
</html>
