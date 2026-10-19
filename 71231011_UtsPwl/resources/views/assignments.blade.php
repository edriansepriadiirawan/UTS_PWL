@extends('main.parent')
@section('title', 'Assignments - UTS PWL')

@section('content')
    @include('main.nav-content')
    @section('child-content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="bi bi-list-task me-2"></i> Assignments</h2>
            <span class="badge bg-info">Active</span>
        </div>
        
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Daftar Tugas - Pemrograman Web Lanjut</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Judul Tugas</th>
                                <th>Deskripsi</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Laravel Installation & Setup</td>
                                <td>Install Laravel 12, konfigurasi database, jalankan migrasi awal</td>
                                <td>2026-09-15 23:59</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Routing, Controller & View</td>
                                <td>Implementasi routing MVC, passing data, parameter URL, form GET/POST</td>
                                <td>2026-09-29 23:59</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Blade Template Inheritance</td>
                                <td>Layout Bootstrap, template inheritance, vertical navigation</td>
                                <td>2026-10-13 23:59</td>
                                <td><span class="badge bg-warning text-dark">Dikerjakan</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Migration & Model Relasional</td>
                                <td>Database SIA 6 tabel, foreign key, relasi Eloquent</td>
                                <td>2026-10-27 23:59</td>
                                <td><span class="badge bg-secondary">Belum Mulai</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-secondary" disabled>Belum</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Factory & Seeder</td>
                                <td>Data dummy Faker, seeder berurutan, HasFactory trait</td>
                                <td>2026-11-10 23:59</td>
                                <td><span class="badge bg-secondary">Belum Mulai</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-secondary" disabled>Belum</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0">Progress Tugas</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Overall Progress</span>
                                <span class="fw-bold">40%</span>
                            </div>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-success" style="width: 40%"></div>
                                <div class="progress-bar bg-warning" style="width: 20%"></div>
                                <div class="progress-bar bg-secondary" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="border-end">
                                    <h4 class="text-success mb-0">2</h4>
                                    <small>Selesai</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="border-end">
                                    <h4 class="text-warning mb-0">1</h4>
                                    <small>Proses</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <h4 class="text-secondary mb-0">2</h4>
                                <small>Belum</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-success text-white">
                        <h6 class="mb-0">Tugas Berikutnya</h6>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <strong>Tugas 3: Blade Template Inheritance</strong><br>
                            Deadline: <strong>2026-10-13 23:59</strong>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Layout Bootstrap 6 Area</span>
                                <span class="badge bg-success">Done</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Template Inheritance Parent + 4 Child</span>
                                <span class="badge bg-warning text-dark">In Progress</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Vertical Navigation di Content</span>
                                <span class="badge bg-secondary">Pending</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endsection