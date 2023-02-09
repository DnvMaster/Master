<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset(env('MASTER')) }}/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,600,700,800,900&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <title>{{ (isset($title)) ? $title : 'DnvMaster - Home service' }}</title>
    <meta name="description" content="{{ (isset($description)) ? $description : 'Поиск мастера, Сантехник, Электрик, Мебельщик ...' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : 'Поиск мастеров и специалистов по выполнению задач ...' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset(env('MASTER')) }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset(env('MASTER')) }}/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset(env('MASTER')) }}/css/style.css">
    <link rel="stylesheet" href="{{ asset(env('MASTER')) }}/css/default.css">
</head>
<body>
    <div id="preloader">
        <div class="row loader">
            <div class="loaderIcon"></div>
        </div>
    </div>
    <!-- Start topLine -->
    <div id="top" class="hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <ul class="top-left">
                        <li><i class="fa fa-clock-o"></i>10 Февраля 2023</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 top-right hidden-sm">
                    <a href="#" class="top-app"><i class="fa fa-user"></i>Логин</a>
                    <a href="#" class="top-app"><i class="fa fa-pencil"></i>Регистрация</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End topLine -->
    @yield('navigation')
    <script src="{{ asset(env('MASTER')) }}/js/jquery.min.js"></script>
    <script src="{{ asset(env('MASTER')) }}/js/bootstrap.min.js"></script>
    <script src="{{ asset(env('MASTER')) }}/js/settings.js"></script>
</body>
</html>
