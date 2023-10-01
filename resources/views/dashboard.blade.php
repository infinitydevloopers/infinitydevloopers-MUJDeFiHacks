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
                        <a href="#" class="block px-4 py-2 rounded-md bg-gray-200 text-gray-800">
                            User Details
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">
                            Borrow Details
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">
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
            <div class="p-4">
                <h2 class="text-xl font-semibold">User Details</h2>
                <div class="mt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- User Details Content -->
                        <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">Name</h3>
                            <p class="mt-2">John Doe</p>
                        </div>
                        <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">Email</h3>
                            <p class="mt-2">john.doe@example.com</p>
                        </div>
                        <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">Phone</h3>
                            <p class="mt-2">+1234567890</p>
                        </div>
                        <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">Address</h3>
                            <p class="mt-2">1234 Main St, Anytown, USA</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lenders List -->
            <div class="p-4 mt-4">
                <h2 class="text-xl font-semibold">Lenders List</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <!-- Lender Cards Content -->
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Lender 1</h3>
                        <p class="mt-2">Lender Information</p>
                    </div>
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Lender 2</h3>
                        <p class="mt-2">Lender Information</p>
                    </div>
                    <!-- Add more lender cards as needed -->
                </div>
            </div>

            <!-- Borrowers List -->
            <div class="p-4 mt-4">
                <h2 class="text-xl font-semibold">Borrowers List</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <!-- Borrower Cards Content -->
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Borrower 1</h3>
                        <p class="mt-2">Borrower Information</p>
                    </div>
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Borrower 2</h3>
                        <p class="mt-2">Borrower Information</p>
                    </div>
                    <!-- Add more borrower cards as needed -->
                </div>
            </div>
        </div>
    </div>

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
