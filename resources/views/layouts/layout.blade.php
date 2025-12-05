<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('css') 
</head>
<body>

    <!-- HEADER / NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="#">Laravel CRUD</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/rumah-sakit" class="nav-link">Rumah Sakit</a>
            </li>
            <li class="nav-item">
                <a href="/pasien" class="nav-link">Pasien</a>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link text-danger">Logout</a>
            </li>
        </ul>
      </div>
    </nav>

    <!-- KONTEN HALAMAN -->
    <div class="container">
        @yield('content')
    </div>

    <!-- FOOTER JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')
</body>
</html>
