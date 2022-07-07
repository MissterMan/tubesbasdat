<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,301,701,300,501,401,901,400&display=swap"
        rel="stylesheet">
    <title>Home</title>
</head>

<body class="h-full">
    <nav class="w-full h-fit shadow-md bg-orange-400">
        <div class="flex justify-between mx-6 py-8 items-center font-satoshi text-white">
            <div class="font-bold text-lg">LABIT</div>
            <div class="flex justify-evenly w-80 text-sm font-light">
                <a href="/user/additem">Tambah Barang</a>
                <a href="/user/show">Pinjam Barang</a>
                {{-- <a href="">Login</a> --}}
            </div>
        </div>
    </nav>

    <main class="h-full">
        @yield('main')
    </main>
</body>

</html>
