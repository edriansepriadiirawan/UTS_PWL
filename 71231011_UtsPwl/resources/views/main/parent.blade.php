<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'UTS PWL - 71231011')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .vh-100 { min-height: 100vh; }
        .border { border: 1px solid #dee2e6 !important; }
        .nav-pills .nav-link.active { background-color: #0d6efd; }
    </style>
</head>
<body>
    <div class="container-fluid">
  
        <div class="row bg-light">
            <div class="col-md-4 border p-3 bg-primary text-white">
                <h4 class="mb-0">LEFT HEADER</h4>
            </div>
            <div class="col-md-4 border p-3 text-center bg-secondary text-white">
                <h4 class="mb-0">CENTER HEADER</h4>
            </div>
            <div class="col-md-4 border p-3 text-end bg-success text-white">
                <h4 class="mb-0">RIGHT HEADER</h4>
            </div>
        </div>


            <!-- CONTENT AREA (includes Vertical Navigation inside) -->
            <div class="col-md-8 border vh-100">
                @yield('content')
            </div>

            <!-- RIGHT NAVIGATION -->
            <div class="col-md-2 border vh-100 bg-light p-3">
                <h5 class="mb-3">RIGHT NAVIGATION</h5>
                <nav class="nav flex-column nav-pills">
                    <a class="nav-link text-dark" href="#">Profile</a>
                    <a class="nav-link text-dark" href="#">Settings</a>
                    <a class="nav-link text-dark" href="#">Logout</a>
                </nav>
            </div>
        </div>

        <div class="row bg-dark text-white">
            <div class="col-md-12 border p-3 text-center">
                <p class="mb-0">FOOTER &copy; 2026 UTS Pemrograman Web Lanjut - 71231011 - Universitas Kristen Duta Wacana</p>
            </div>
        </div>
    </div>
</html>