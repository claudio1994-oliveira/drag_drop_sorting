<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
    <div class="max-w-2xl mx-auto py-12">
        {{ $slot }}
    </div>
    @livewireScriptConfig
    </body>
</html>
