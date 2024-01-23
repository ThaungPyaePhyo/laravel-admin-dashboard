<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Admin Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
{{--    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body class="h-screen font-sans bg-gray-100 dark:bg-slate-900">
    <div class="container-2xl mx-0 px-0">
        <header>
            @include('layouts.nav')
        </header>
        <aside>
            @include('layouts.sidebar')
        </aside>
        <main>
            {{ $slot ?? '' }}
        </main>
        <footer>
        </footer>
    </div>
    <x-admin.comfirm-delete />
    <x-admin.alert />
    @yield('content')
    @yield('js')
    <script>
        const light = document.querySelector(".light");
        const darkMode = document.querySelector(".dark");
        const userTheme = localStorage.getItem("theme");
        const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

        const iconToggle = () => {
            darkMode.classList.toggle("hidden");
            light.classList.toggle("hidden");
        };

        const themeCheck = () => {
            if (userTheme === 'dark' || (!userTheme && systemTheme)) {
                console.log('dark')
                document.documentElement.classList.add("dark");
                darkMode.classList.add("hidden");
                return;
            }
            light.classList.add("hidden");
        };

        const themeSwitch = () => {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("theme", "light");
                iconToggle();
                return;
            }
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
            iconToggle();
        };

        light.addEventListener("click", () => {
            themeSwitch();
        });

        darkMode.addEventListener('click', () => {
            themeSwitch();
        });

        themeCheck();
    </script>
</body>

</html>
