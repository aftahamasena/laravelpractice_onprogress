<nav class="bg-white px-4 py-4 md:px-8 lg:py-3 fixed min-w-full">
    <div class="flex flex-wrap justify-between items-center lg:flex-nowrap">
        <h1 class="font-semibold">Library App</h1>
        <button class="block lg:hidden" id="navButton">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="hidden flex-col items-center gap-2 w-full mt-4 lg:flex lg:w-fit lg:flex-row lg:mt-0" id="navMenu">
            @forelse ($menus as $menu)
                <li class="px-4 py-2 text-sm font-medium transition-all duration-300 rounded      hover:bg-gray-200">
                    <a href="{{ $menu['href'] }}">{{ $menu['label'] }}</a>
                </li>
            @empty
                <p class="text-sm text-red-600">Your menus
                    is still empty</p>
            @endforelse
            @switch($loggedIn)
                @case(true)
                    <li class="flex items-center gap-4 lg:ml-4">
                        <p class="font-medium text-sm text-gray-400">Khen Cahyo</p>
                        <div class="avatar placeholder">
                            <div class="bg-gray-200 text-neutral-content rounded-full w-10">
                                <span class="text-lg fontsemibold">K</span>
                            </div>
                        </div>
                    </li>
                @break

                @default
                    <li class="mt-4 flex flex-col gap-4 md:flex-row md:items-center lg:mt-0 lg:ml-4">
                        <button
                            class="px-3 py-2 border border-gray-800 rounded text-xs font-medium block w-full transition-all duration-300 hover:bg-gray-800 hover:text-white lg:text-sm">Login</button>
                        <button
                            class="px-3 py-2 bg-gray-800 rounded text-xs font-medium text-white block w-full lg:text-sm">Register</button>
                    </li>
            @endswitch
        </ul>
    </div>
</nav>
