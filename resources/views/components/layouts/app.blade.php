<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image App</title>
    <!-- Include any other head elements, styles, or scripts you need -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Livewire styles and scripts -->
    @stack('styles')
    @livewireStyles
</head>
<body>
    <div id="app">
        <!-- Your navigation, header, and other layout elements go here -->

        <main class="py-4">
            <div class="container mx-auto">
                <!-- Livewire component inclusion -->
               {{$slot}}
            </div>
        </main>
    </div>

    <!-- Livewire scripts -->
    @livewireScripts

    <!-- Include any other scripts you need -->
</body>
</html>
