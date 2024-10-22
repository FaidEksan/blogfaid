<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $tittle }} - M Faid Eksan F 2110651148</title>
</head>
<body>
    <div class="min-h-full">
        <!-- COMPONENT NAVBAR -->
        <x-navbar></x-navbar>
      
        <!-- COMPONENT HEADER -->
        <x-header> {{ $tittle }}</x-header>

    
        <main>
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{ $slot }}
          </div>
        </main>
      </div>
      
</body>
</html>