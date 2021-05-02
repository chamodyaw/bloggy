<nav id="header" class="fixed w-full z-10 top-0">

    <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

        <div class="pl-4">
            <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
                {{ config('app.name', 'Bloggy') }}
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                @guest
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="{{ route('post.create') }}">New Post</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="#">My Posts</a>
                    </li>
                    <li class="mr-3">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            <button class="inline-block py-2 px-4 text-gray-900 font-bold no-underline">Logout</button>
                        </form>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
