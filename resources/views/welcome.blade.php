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

            <div class="max-w-7xl p-6 lg:p-8 mt-32">
                <div class="flex justify-center p-6">
                    <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl dark:text-white">Test Your Knowledge</h1>
                </div>
                <div class="flex flex-wrap gap-4">
                    @foreach($quizzes as $quiz)
                    <div class="card w-96 bg-base-100 shadow-xl mb-4">
                        <figure><img src="{{ $quiz->quiz_image }}" alt="{{ $quiz->quiz_name }}" /></figure>
                        <div class="card-body">
                          <h2 class="card-title">{{ $quiz->quiz_name }}</h2>
                          <p>{{ $quiz->description }}</p>
                          <div class="card-actions justify-end">
                            <a href="{{ url('/test').'/'.$quiz->id }}" class="btn btn-primary">Take Test</a>
                          </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="card w-96 bg-base-100 shadow-xl mb-4">
                        <figure><img src="https://images.unsplash.com/photo-1451226428352-cf66bf8a0317?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Shoes" /></figure>
                        <div class="card-body">
                          <h2 class="card-title">Shoes!</h2>
                          <p>If a dog chews shoes whose shoes does he choose?</p>
                          <div class="card-actions justify-end">
                            <button class="btn btn-primary">Take Test</button>
                          </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-base-100 shadow-xl mb-3">
                        <figure><img src="https://images.unsplash.com/photo-1565022536102-f7645c84354a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Shoes" /></figure>
                        <div class="card-body">
                          <h2 class="card-title">Shoes!</h2>
                          <p>If a dog chews shoes whose shoes does he choose?</p>
                          <div class="card-actions justify-end">
                            <button class="btn btn-primary">Take Test</button>
                          </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-base-100 shadow-xl mb-3">
                        <figure><img src="https://images.unsplash.com/reserve/uZYSV4nuQeyq64azfVIn_15130980706_64134efc6e_o.jpg?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Shoes" /></figure>
                        <div class="card-body">
                          <h2 class="card-title">Shoes!</h2>
                          <p>If a dog chews shoes whose shoes does he choose?</p>
                          <div class="card-actions justify-end">
                            <button class="btn btn-primary">Take Test</button>
                          </div>
                        </div>
                    </div> --}}
                </div>  
            </div>
        </div>
    </body>
</html>
