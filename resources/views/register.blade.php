<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- BODY --}}
    <div class="font-sans text-gray-900 antialiased">
        {{-- CONTAINER FOR LOGO --}}
        <div class="min-h-screen flex flex-col items-center pt-6 bg-gray-100 sm:justify-center sm:pt-6">
            <div>
                <a href="/">
                    <img src="images/puzzle.png" alt="logo" class="w-20 h-20 fill-current text-gray-500">
                </a>
            </div>
            {{-- CONTAINER FOR INPUT --}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form>
                    {{-- Username --}}
                    <div>
                        <label for="username" class="block font-medium text-sm text-gray-700">Name</label>
                        <input type="text" id="username" name="username" required autofocus
                            class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                    </div>
                    {{-- Email --}}
                    <div class="mt-4">
                        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required autofocus
                            class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                    </div>
                    {{-- Password --}}
                    <div class="mt-4">
                        <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                        <input type="password" id="password" name="password" autocomplete="new-password" required
                            autofocus
                            class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                    </div>
                    {{-- Confirm Password --}}
                    <div class="mt-4">
                        <label for="password" class="block font-medium text-sm text-gray-700">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            autofocus
                            class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                        {{-- UserType --}}
                        <div class="block mt-4">
                            <label for="lecture" class="inline-flex items-center">
                                <input type="radio" name="usertype" id="lecture"
                                    class="rounded border border-gray-300 text-indigo-600 shadow-md 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus
                    focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-600">Lecturer</span>
                            </label>
                            <label for="student" class="inline-flex items-center">
                                <input type="radio" name="usertype" id="student"
                                    class="ml-3 rounded border border-gray-300 text-indigo-600 shadow-md 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus
                    focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-600">Student</span>
                            </label>
                        </div>
                        {{-- Bring to login --}}
                        <div class="flex items-center justify-end mt-4">
                            <a href="/login" class="underline text-sm text-gray-600 hover:text-gray-900">
                                Already Have an Account?
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800
                border border-transparent rounded-md font-semibold text-xs text-white uppercase
                tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none
                focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 
                transition ease-in-out duration-150 ml-3">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
