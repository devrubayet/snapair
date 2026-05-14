<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin-end/assets/favicon_io/apple-touch-icon.png') }}">

    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('admin-end/assets/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('admin-end/assets/favicon_io/site.webmanifest') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js']) <title>{{ $settings->site_name }}</title>
</head>

<body><x-navbar />@yield('content')
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        const btn = document.getElementById("menu-btn");
        const menu = document.getElementById("navbar-default");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>

</html>
