<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 — {{ config('app.name', 'Laravel') }}</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50 flex flex-col items-center justify-center text-center">
  <h1 class="text-8xl font-bold text-blue-600">404</h1>
  <p class="mt-4 text-lg text-gray-600">Oops! The page you’re looking for doesn’t exist.</p>

  <div class="mt-6 flex flex-col sm:flex-row gap-3">
    <a href="{{ url('/') }}" 
       class="px-6 py-2 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700">
       Go Home
    </a>

  </div>

  <p class="mt-10 text-sm text-gray-400">
    &copy; {{ now()->year }} {{ config('app.name', 'Laravel') }}. All rights reserved.
  </p>
</body>
</html>
