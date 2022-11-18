<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class=" font-sans text-center text-gray-700 antialiased">
        <div id="app">
            <example-component></example-component>
        </div>
        <div class=" p-8">
            <h1 class=" text-3xl">Expert Session</h1>
            <h2 class="text-xl">Group name</h2>
        </div>
        <div class="p-5">
            <div id="studentList"></div>
            <button class="m-2 p-2 border-none rounded bg-slate-400 text-white">Go to material</button>
        </div>
    </div>
</body>

</html>
