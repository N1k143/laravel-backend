<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Управление студентами')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Students</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Главная</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">О проекте</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">Контакты</a></li>
                <li class="nav-item"><a href="{{ route('students.index') }}" class="nav-link">Студенты</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
