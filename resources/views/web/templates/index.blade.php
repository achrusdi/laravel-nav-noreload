@yield('method')
@if ($method == 'GET')
    <!DOCTYPE html>
    <html>

    <head>
        {{-- <title>{{ @yield('title') }} | aqyqo</title> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- menghubungkan dengan file css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    </head>

    <body>
        <div class="content">
            <header>
                <h1 class="judul"> Aqyqo</h1>
                <h3 class="deskripsi">Membuat Halaman Website Ajax Laravel Tanpa Reload dengan JQuery</h3>
            </header>

            <div class="menu">
                <ul>
                    <li><a class="klik_menu" id="home" onclick="navHome()">HOME</a></li>
                    <li><a class="klik_menu" id="tentang" onclick="navTentang()">TENTANG</a></li>
                    <li><a class="klik_menu" id="tutorial" onclick="navTutorial()">TUTORIAL</a></li>
                    <li><a class="klik_menu" id="sosmed" onclick="navSosmed()">SOSIAL MEDIA</a></li>
                </ul>
            </div>

            <div class="badan">
@endif
@yield('content')
@if ($method == 'GET')
    </div>

    </div>
    </body>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/plugins/JQuery/jquery-3.6.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

    </html>
@endif
