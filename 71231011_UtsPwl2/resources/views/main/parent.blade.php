<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'UTS PWL - 71231011')</title>
    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .vh-100 { min-height: 100vh; }
        .border { border: 1px solid #dee2e6 !important; }
        .nav-pills .nav-link.active { background-color: #0d6efd; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- ========================================
             HEADER ROW: LEFT HEADER | RIGHT HEADER
             ======================================== -->
        <div class="row bg-light">
            <div class="col-md-6 border p-3 bg-primary text-white">
                <h4 class="mb-0">LEFT HEADER</h4>
                <small>Universitas Kristen Duta Wacana</small>
            </div>
            <div class="col-md-6 border p-3 text-end bg-secondary text-white">
                <h4 class="mb-0">RIGHT HEADER</h4>
                <small>71231011 - Pemrograman Web Lanjut</small>
            </div>
        </div>

        <!-- ========================================
             BODY ROW: LEFT NAVIGATION | CONTENT | RIGHT NAVIGATION
             ======================================== -->
        <div class="row">
            <!-- LEFT NAVIGATION -->
            <div class="col-md-2 border vh-100 bg-light p-3">
                <h5 class="mb-3">LEFT NAVIGATION</h5>
                <nav class="nav flex-column nav-pills">
                    <a class="nav-link text-dark" href="/dosen">Data Dosen</a>
                    <a class="nav-link text-dark" href="/mahasiswa">Data Mahasiswa</a>
                    <a class="nav-link text-dark" href="/matakuliah">Data Mata Kuliah</a>
                    <a class="nav-link text-dark" href="/jadwal">Data Jadwal</a>
                    <a class="nav-link text-dark" href="/registrasi">Data Registrasi</a>
                    <a class="nav-link text-dark" href="/krskhs">Data KRS/KHS</a>
                    <hr>
                    <a class="nav-link text-dark" href="/courses">Courses</a>
                    <a class="nav-link text-dark" href="/students">Students</a>
                    <a class="nav-link text-dark" href="/grades">Grades</a>
                    <a class="nav-link text-dark" href="/assignments">Assignments</a>
                    <a class="nav-link text-dark" href="/mahasiswa-form">Form Mahasiswa (1.a)</a>
                </nav>
            </div>

            <!-- CONTENT AREA -->
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

        <!-- ========================================
             FOOTER ROW
             ======================================== -->
        <div class="row bg-dark text-white">
            <div class="col-md-12 border p-3 text-center">
                <p class="mb-0">FOOTER &copy; 2026 UTS Pemrograman Web Lanjut - 71231011 - Universitas Kristen Duta Wacana</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>