<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create account</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../assets/js/init-alpine.js"></script>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                Create account
                            </h1>

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                                <input name="name"
                                    class="@error('name') border-red-500 @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Ingrese su Nombre" type="text" />
                                @error('name')
                                    <p class="bg-red-500 text-red-500 my-2 rounded-lg text-sm p-2 text-center">
                                        {{ $message }}</p>
                                @enderror

                                <label class="block text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                                    <input name="email"
                                        class=" @error('email') border-red-500 @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="Ingrese su Email" type="email" />
                                        @error('email')
                                        <p class="bg-red-500 text-red-500 my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block mt-4 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Password</span>
                                    <input
                                        class="@error('password') border-red-500 @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="***************" type="password" name="password" />
                                        @error('password')
                                        <p class="bg-red-500 text-red-500 my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block mt-4 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">
                                        Confirm password
                                    </span>
                                    <input
                                        class="@error('password2') border-red-500 @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                        placeholder="***************" type="password" name="password2" />
                                        @error('password2')
                                        <p class="bg-red-500 text-red-500 my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }}</p>
                                    @enderror
                                </label>

                                <!-- You should use a button here, as the anchor is only used for the example  -->
                                <button
                                    class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                                    href="">
                                    Create account
                                </button>
                        </form>
                        <hr class="my-8" />

                        <p class="mt-4">
                            <a class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:underline"
                                href="{{ route('login') }}">
                                Already have an account? Login
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
