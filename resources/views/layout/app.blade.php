<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>@yield('title', 'MirimWeb')</title>
</head>

<body>

    <main class ="pt-[50px] sm:pt-[50px]">
        
        @include('layout.components.navbar')

        @yield('content')

        @include('layout.components.footer')

    </main>

</body>
