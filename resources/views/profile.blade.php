<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- BODY --}}
    <div class="font-sans text-gray-900 antialiased">
        {{-- CONTAINER FOR Background --}}
        <div
            class="min-h-screen flex flex-col items-center pt-6 bg-gray-100 sm:justify-center
        sm:flex-row sm:pt-6">
            <img src="images/emoji.png" alt="userPicture" class="w-20 h-20 rounded-full object-scale-down">
            <div class="sm:p-6"></div>
            {{-- Container for info --}}
            <div
                class="w-10/12 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md 
            overflow-hidden sm:rounded-lg">
                {{-- Username --}}
                <div>
                    <p class="block font-medium text-sm text-gray-700 sm:text-lg">Username</p>
                    <p class="block font-medium text-xl sm:text-2xl">Username Test</p>
                </div>
                {{-- Email --}}
                <div class="mt-4">
                    <p class="block font-medium text-sm text-gray-700 sm:text-lg">Email</p>
                    <p class="block font-medium text-xl sm:text-2xl">Username@test.com</p>
                </div>
                <div class="mt-4">
                    <a href="/edit" class="text-green-500">Edit</a>
                    <a href="/delete" class="inline-flex px-10 text-red-500">Delete</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
