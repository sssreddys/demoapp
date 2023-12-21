<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Livewire styles -->
    @livewireStyles
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8 flex justify-center items-center h-screen">
        @livewire('image-upload')
    </div>

    <!-- Livewire scripts -->
    @livewireScripts
</body>
</html>
