<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Laravel</title>
</head>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
      <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
      @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1 class="text-red-400">Pizza House</h1>
        <h2>Best Pizza in Erbil</h2>
      </div>

    </div>
  </div>
  </div>
</body>

</html>