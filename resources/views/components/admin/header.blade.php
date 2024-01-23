@props(['title' => '', 'name' => '', 'route' => ''])
<div class="mx-28 mb-2 text-slate-900 dark:text-white">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="#"
               class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <i class="fa-solid fa-house fa-md text-gray-500"></i>&nbsp;
                {{ $title }}
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <i class="fa-regular fa-greater-than fa-xs text-gray-500"></i>
                <a href="#"
                   class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">{{ $name }}</a>
            </div>
        </li>
    </ol>
</div>
<div class="flex justify-between mx-28 mb-6">
    <div class="flex align-middle flex-col">
        <h1 class="text-slate-900 text-2xl dark:text-white font-semibold">{{ $title }}</h1>
    </div>
    @if($route)
        <a class="rounded-lg p-2 bg-yellow-500 text-white text-sm font-bold px-4"
           href="{{ $route }}">Add New</a>
    @endif
</div>
