<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Tambahkan animasi untuk dropdown */
        .dropdown-enter {
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s, transform 0.3s;
        }

        .dropdown-leave {
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-enter-active {
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-leave-active {
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s, transform 0.3s;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Top Menu Bar -->
    <nav class="bg-gray-800 p-6 shadow-lg">
        <div class="container mx-auto">
            <div class="flex justify-center items-center">
                <!-- Menu List -->
                <ul class="flex space-x-12 text-white text-xl font-semibold">
                    <!-- Dropdown Master Data -->
                    <li class="relative group">
                        <a href="#" class="no-underline hover:no-underline text-white" onclick="toggleDropdown(event)">Master Data</a>
                        <ul id="dropdown-menu"
                            class="absolute hidden group-hover:block bg-gray-800 text-white shadow-lg rounded-lg mt-2 w-56">
                            <li>
                                <a href="{{ route('event_categories.index') }}" class="block px-6 py-3 hover:bg-gray-600 hover:pl-8 transition-all duration-200 text-white rounded-t-lg">Master Event Category</a>
                            </li>
                            <li>
                                <a href="{{ route('organizers.index') }}" class="block px-6 py-3 hover:bg-gray-600 hover:pl-8 transition-all duration-200 text-white">Master Organizer</a>
                            </li>
                            <li>
                                <a href="{{ route('events.index') }}" class="block px-6 py-3 hover:bg-gray-600 hover:pl-8 transition-all duration-200 text-white rounded-b-lg">Master Event</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Regular link -->
                    <li><a href="{{ route('event_menu') }}" class="no-underline hover:no-underline text-white">Events</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mx-auto p-8 bg-white shadow-md rounded-lg mt-8">
        @yield('content')
    </div>

    <script>
        function toggleDropdown(event) {
            event.preventDefault();
            const dropdown = document.getElementById('dropdown-menu');
            dropdown.classList.toggle('hidden');
        }

        window.onclick = function(event) {
            if (!event.target.matches('.group a')) {
                const dropdown = document.getElementById('dropdown-menu');
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            }
        }
    </script>
</body>

</html>