<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="p-6 lg:px-8">
    <header class="bg-white">
        <nav class=" flex items-center justify-between " aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
            </div>
            <div class="flex gap-2">
                <a @class([
                    'p-4',
                    'font-bold text-red-600' => request()->route()->getName() === 'blog.index',
                ]) href="{{ route('blog.index') }}"
                    class="text-sm font-semibold leading-6 text-gray-900">Blog</a>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in</a>
            </div>
        </nav>

        </div>
    </header>

    <div class=" mx-auto">
        @yield('content')
    </div>
</body>

</html>
