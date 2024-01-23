<nav class="fixed top-0 z-50 w-full bg-white text-slate-900 dark:text-white dark:bg-slate-900 border border-slate-200 dark:border-slate-950 shadow-xl">
    <div class="flex justify-center sm:justify-between mx-10 py-2">
        <div class="hidden sm:block">
            <h1 class="text-2xl font-bold font-mono cursor-pointer">Admin Demo</h1>
        </div>
        <div class="">
            <div class="flex items-center justify-center gap-6">
                <div class="relative cursor-pointer">
                    <span class=""><i class="far fa-bell fa-xl"></i></span>
                    <span class="absolute right-0 left-4 -top-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">3</span>
                </div>
                <div class="relative ml-3">
                    <div>
                        <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 light">light</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark">dark</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    var userMenuButton = document.getElementById('user-menu-button');
    var userMenu = document.querySelector('[role="menu"]');

    userMenuButton.addEventListener('click', function () {
        userMenu.classList.toggle('hidden');
    });
</script>
