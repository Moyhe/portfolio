<!-- ====== Navbar Section Start -->
<header x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-20">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">

            <div class="pr-4 w-60 ml-4 max-w-full">
                <a href="{{ url('/') }}" class="w-full flex items-center py-2">
                    <img src="{{ url('/images/geni.png') }}" alt="logo"
                        class="w-[48px] lg:w-[64px] mr-2 inline-block dark:hidden" />
                    <img src="{{ url('/images/geni.png') }}" alt="logo"
                        class="w-[48px] lg:w-[64px] mr-2 hidden dark:inline-block" />
                    <span class="text-xl xl:text-2xl  font-bold text-[#0c7187] dark:text-white">Love</span>
                </a>
            </div>

            <div class="flex px-4 lg:justify-end items-center w-full">
                <div class="dark:text-white w-5 h-5">
                    <x-toggle-theme />
                </div>
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                        x-bind:class="navbarOpen && 'navbarTogglerActive'">
                    </x-layout.navbar-hamburger>
                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-0 top-full sm:flex bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                            @endforeach
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>



<!-- ====== Navbar Section End -->
