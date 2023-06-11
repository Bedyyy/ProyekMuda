<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="@yield('css')">
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
    @yield('content')
</body>