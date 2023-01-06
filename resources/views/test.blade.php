<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
<div class="font-sans text-gray-900 antialiased">
    <div class="pt-6 bg-gray-100 sm:justify-center sm:pt-6 rounded-xl min-h-screen">
        <div class="flex flex-col items-center pt-6">
            <h1 class=" text-xl"> Create Topic</h1>
            <p> contoh -> name | description </p>
            <div class="w-7/12 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form @submit="formSubmit">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text block font-medium text-gray-700">Topic Name</span>
                        </label>
                        <input type="text" placeholder="Type here" class="input input-bordered input-sm w-full max-w-xs"/>
                    </div>
                    <div class="mt-4">
                        <span class="block font-medium text-gray-700 text-sm">Number of Modules</span>
                        <input type="range" min="0" max="100" value="25" class="mt-2 range range-primary w-80" step="25"/>
                        <div class="w-full flex justify-between text-xs px-2 w-80">
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                        </div>
                    </div>
                    <div class="form-control w-full max-w-xs mt-3">
                        <label class="label">
                            <span class="label-text block font-medium text-gray-700">Max Time for Expert Session</span>
                        </label>
                        <input type="text" placeholder="Type here" class="input input-bordered input-sm w-full max-w-xs"/>
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text block font-medium text-gray-700">Max Time for Jigsaw Session</span>
                        </label>
                        <input type="text" placeholder="Type here" class="input input-bordered input-sm w-full max-w-xs"/>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary btn-xs sm:btn-sm md:btn-md lg:btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
