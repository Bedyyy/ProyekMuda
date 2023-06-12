<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />



    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .color-primary {
            color: #FB763D;
        }

        .search-bar {
            border: none;
            height: 3.8rem !important;
        }

        .search-bar:focus {
            outline: none !important;
            border: none !important;
        }

        .submit-btn {
            background: linear-gradient(180deg, #28e646 0%, #15ca5e 100%);
            height: 3.3rem;
            outline: none !important;
        }
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
     @yield('content')
    <!-- JQuery -->

    <!-- Slick JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>