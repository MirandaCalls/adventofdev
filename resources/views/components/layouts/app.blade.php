<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('app.css') }}" rel="stylesheet">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <div class="snow">
            <div class="snow-nested">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
