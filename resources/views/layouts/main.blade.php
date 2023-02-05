<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>MovieDB</title>
</head>

<body class="font-sans text-white bg-gray-900">
    <nav class="">
        <div class="container flex flex-col items-center justify-between px-4 py-6 mx-auto md:flex-row">
            <ul class="flex flex-col items-center md:flex-row">
                <li>
                    <a href="#" class="mt-3 text-2xl font-semibold md:mt-0">MovieDB</a>
                </li>
                <li class="mt-3 md:ml-16 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="mt-3 md:ml-6 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="mt-3 md:ml-6 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="mt-3 md:ml-4 md:mt-0">
                <a href="">
                    <svg class="transition duration-150 ease-in-out hover:text-red-500"
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
