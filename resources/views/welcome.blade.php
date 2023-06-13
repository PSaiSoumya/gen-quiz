<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Dosis:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center fle">
                    <div class="mb-4">
                        <svg style="width: 75px" id="quiz-logo"  viewBox="0 0 54 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path style="stroke: red" id="logo-outer" d="M47.2094 41.4011L47.2751 41.2317C47.661 40.2358 48.133 39.2067 48.6447 38.1033C48.6783 38.0306 48.7122 37.9576 48.7462 37.8844C49.2221 36.8586 49.7256 35.7732 50.1846 34.6554C51.1689 32.2585 52 29.5958 52 26.6897C52 12.8826 40.8071 1.6897 27 1.6897C13.1929 1.6897 2 12.8826 2 26.6897C2 40.4968 13.1929 51.6897 27 51.6897C30.9113 51.6897 35.4212 50.4022 38.8013 48.78C41.3325 50.8562 43.3541 52.4147 44.9511 53.5371C46.6674 54.7434 48.0055 55.5281 49.0107 55.863C49.4902 56.0227 50.142 56.1681 50.7932 55.9753C51.6237 55.7293 52.065 55.0683 52.202 54.4182C52.316 53.8776 52.2343 53.3295 52.1382 52.9099C52.0346 52.4576 51.8695 51.9724 51.6789 51.4869C51.1963 50.2576 50.4014 48.6789 49.6323 47.1512C49.2367 46.3655 48.848 45.5934 48.512 44.8891C47.9895 43.7942 47.5821 42.8458 47.3637 42.1161C47.2622 41.777 47.2199 41.544 47.2094 41.4011ZM47.2071 41.3128C47.2076 41.3037 47.2082 41.2995 47.2084 41.2996C47.2087 41.2998 47.2084 41.3044 47.2071 41.3128Z" stroke-width="3"/>
                        <path style="fill: red" id="logo-inner" d="M37.728 33.648C37.936 33.648 38.096 33.744 38.208 33.936C38.336 34.128 38.4 34.392 38.4 34.728C38.4 35.352 38.248 35.848 37.944 36.216C37.048 37.288 36.176 38.04 35.328 38.472C34.496 38.904 33.488 39.12 32.304 39.12C31.472 39.12 30.704 39.016 30 38.808C29.296 38.6 28.44 38.288 27.432 37.872C26.568 37.504 25.8 37.208 25.128 36.984C24.392 37.784 23.728 38.344 23.136 38.664C22.544 38.968 21.92 39.12 21.264 39.12C20.384 39.12 19.68 38.92 19.152 38.52C18.624 38.104 18.36 37.568 18.36 36.912C18.36 36.416 18.52 35.96 18.84 35.544C19.176 35.128 19.64 34.8 20.232 34.56C20.824 34.32 21.512 34.2 22.296 34.2C22.744 34.2 23.08 34.208 23.304 34.224C26.44 30.32 29.272 26.2 31.8 21.864C30.424 21.624 29.024 21.504 27.6 21.504C25.76 21.504 24.408 21.72 23.544 22.152C22.696 22.568 22.272 23.232 22.272 24.144C22.272 24.416 22.304 24.648 22.368 24.84C22.432 25.032 22.528 25.256 22.656 25.512C22.8 25.8 22.872 26.008 22.872 26.136C22.872 26.456 22.72 26.728 22.416 26.952C22.128 27.16 21.792 27.264 21.408 27.264C21.008 27.264 20.68 27.144 20.424 26.904C20.12 26.632 19.872 26.264 19.68 25.8C19.504 25.32 19.416 24.784 19.416 24.192C19.416 22.32 20.192 20.936 21.744 20.04C23.296 19.144 25.344 18.696 27.888 18.696C29.152 18.696 30.44 18.768 31.752 18.912C33.08 19.056 34.32 19.288 35.472 19.608C35.952 19.736 36.272 19.92 36.432 20.16C36.592 20.384 36.672 20.68 36.672 21.048C36.672 21.48 36.56 21.816 36.336 22.056C36.112 22.296 35.8 22.416 35.4 22.416H35.232C33.504 25.232 31.752 27.936 29.976 30.528C28.552 32.592 27.552 33.992 26.976 34.728C27.904 34.936 28.712 35.128 29.4 35.304C30.248 35.528 30.928 35.696 31.44 35.808C31.968 35.904 32.424 35.952 32.808 35.952C33.736 35.952 34.528 35.8 35.184 35.496C35.856 35.176 36.488 34.672 37.08 33.984C37.272 33.76 37.488 33.648 37.728 33.648Z" />
                        </svg>
                    </div>  
                </div>
                <div class="max-w-xl">
                    <x-header>Welcome to QuizGen!</x-header>
                    <div class="mt-16 text-gray-700 dark:text-gray-400 text-lg">
                        A quiz app is a software application designed to provide users with an interactive and engaging way to test their knowledge and learn new information. It typically consists of a collection of questions across various topics or categories, allowing users to select quizzes based on their interests or educational goals.
                    </p>
                </div>  
            </div>
        </div>
    </body>
</html>
