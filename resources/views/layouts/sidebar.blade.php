<div class="overflow-hidden mt-16">
    <button type="button" class="" id="toggleButton">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0"
        aria-label="Sidebar">

        <div class="h-full px-3 py-4 pt-20  overflow-y-auto bg-gray-100 dark:bg-slate-900" id="test">
            <ul class="space-y-2 font-medium py-4">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-house fa-lg text-gray-400 group-hover:text-white"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}"
                       class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group
                            {{ request()->routeIs('category.index') ? 'bg-gray-500 text-yellow-500' : 'text-slate-900 dark:text-white' }}">
                        <i class="fa-solid fa-bolt fa-lg
                            {{ request()->routeIs('category.index') ? 'text-yellow-500 group-hover:text-yellow-600' : 'text-gray-400 group-hover:text-white' }} "></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Product Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}"
                       class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group
                            {{ request()->routeIs('products.index') ? 'bg-gray-500 text-yellow-500' : 'text-slate-900 dark:text-white' }}">
                        <i class="fa-solid fa-bolt fa-lg
                            {{ request()->routeIs('products.index') ? 'text-yellow-500 group-hover:text-yellow-600' : 'text-gray-400 group-hover:text-white' }} "></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-users fa-lg text-gray-400 group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-bag-shopping fa-lg text-gray-400 group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-user-group fa-lg text-gray-400 group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-arrow-right-to-bracket fa-lg text-gray-400 group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toggleButton = document.getElementById('toggleButton');
        var sidebar = document.getElementById('default-sidebar');

        if (toggleButton && sidebar) {
            toggleButton.addEventListener('click', function (event) {
                  event.stopPropagation();
                sidebar.classList.remove('-translate-x-full');
            });
        }
        document.addEventListener('click', function (event) {
             if (window.innerWidth < 1024 ) {
                sidebar.classList.add('-translate-x-full');
            }
        });
    });
</script>

