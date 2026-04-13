<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todo App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">TodoApp</h1>

      <div class="space-x-3">
        @auth
            <form method="post" action="{{route('logout')}}">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                  Logout
                </button>
            </form>
        @else
            <a href="{{route('register')}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Register
            </a>
            <a href="{{route('login')}}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
              Login
            </a>
        @endauth
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="flex-grow flex items-center justify-center px-4 py-10">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-white shadow-inner py-4 text-center text-gray-600">
    © 2026 TodoApp. All rights reserved.
  </footer>

</body>

</html>