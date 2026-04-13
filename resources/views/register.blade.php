<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>

<body>
    <!-- REGISTER FORM -->
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
                Register
            </h2>

            <form action="{{route('post.register')}}" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Enter your name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Enter password"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Confirm Password</label>
                    <input
                        type="password"
                        placeholder="Confirm password"
                        name="password_confirmation"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <button
                    type="submit"
                    class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                    Register
                </button>

                <p class="text-center text-gray-600 mt-4">
                    Already have an account?
                    <a href="{{route('login')}}" class="text-green-600 hover:underline">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>