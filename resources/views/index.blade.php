<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComicTee</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="main-bg">
<main>
    <header class="container header">
        <div class="logo">
            <img src="https://laravel.com/img/logomark.min.svg" alt="Logo">
        </div>
        <div class="search">
            <form action="#" method="get" class="search-form">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="submit" class="search-button" value="Submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </header>
</main>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
