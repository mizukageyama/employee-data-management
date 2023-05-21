<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Employee Data Management</title>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <div class="bg-white flex px-8 py-2 items-center justify-between shadow">
        <div class="flex">
            <a href="/" class="flex items-center">
                <img src="{{asset('images/freepik-logo.jpg')}}" alt="logo" class="w-7" />
                <p class="text-sm text-gray-700 font-semibold uppercase italic ml-1">EcoTech INC.</p>
            </a>
            <div class="rounded-lg bg-gray-50 py-3 px-2 ml-8">
                <ul class="flex items-center text-xs text-gray-400">
                    <li>
                        <a href="/"
                            class="ml-1 px-5 py-1 rounded-lg {{Request::is('/')? 'active_link':'inactive_link'}}">Employee</a>
                    </li>
                    <li>
                        <a href="/employee/add"
                            class="ml-1 px-5 py-1 rounded-lg {{Request::is('employee/add')? 'active_link':'inactive_link'}}">Create
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <!-- Search -->
            <form action="/">
                <div class="relative border-2 border-gray-100 rounded-lg  text-sm ">
                    <input type="text" name="search"
                        class="h-7 w-full pl-4 pr-20 text-gray-500 rounded-lg z-0 focus:shadow focus:outline-none"
                        placeholder="Search Employee..." />
                    <div class="absolute top-0 right-0">
                        <button type="submit"
                            class="h-7 w-12 z-2 rounded-r-md bg-green-500 hover:bg-green-500 text-white">
                            <i class="fa fa-search z-4"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <main>
        @yield('content')
    </main>


    <footer class="bg-white shadow mt-auto">
        <div class="w-full mx-auto p-4">
            <span class="text-sm text-gray-500 sm:text-center">© 2023
                <a href="/" class="hover:underline">EcoTech Inc.</a> All Rights Reserved.
            </span>
        </div>
    </footer>

</body>

</html>