<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Minha Aplicação' }}</title>
    <!-- CSS e outros links -->
</head>
<body>
    <x-layout.header />
    <main>
        {{ $slot }}
    </main>
    <x-layout.footer />
</body>
</html>
