<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Главная' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:navbar />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anta&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <main class="grow container">
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
