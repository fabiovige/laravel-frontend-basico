<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen w-full" >
<h1>Alpine</h1>
    <h2>x-data</h2>
    <div x-data="{ open: false }">
        <button @click="open = ! open">Toggle Content</button>

        <div x-show="open">
            Content...
        </div>

        <div class="flex flex-col " x-data="{ visible: true, hasShadow:false}">
            <div x-show="true" class="w-[180px] h-[120] my-2 bg-blue-100 shadow-regular rounded-md">a</div>
            <div class="w-[180px] h-[120] my-2 bg-blue-300 shadow-medium rounded-md">b</div>
            <div
                class="w-[180px] h-[120] my-2 bg-blue-600 shadow-badge rounded-md"
                x-bind:class="{'w-[180px] h-[120] my-2 bg-blue-300 shadow-medium rounded-md':visible, 'shadow-hard': hasShadow}"
            >c</div>
        </div>
    </div>
</body>
</html>
