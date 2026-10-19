@extends('main.parent')
@section('title', 'Courses - UTS PWL')

@section('content')
    @include('main.nav-content')
    @section('child-content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="bi bi-book me-2"></i> Courses</h2>
            <span class="badge bg-primary">Active</span>
        </div>
        
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Daftar Mata Kuliah</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Kode MK</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Dosen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PWL001</td>
                                <td>Pemrograman Web Lanjut</td>
                                <td>3</td>
                                <td>Ganjil 2025/2026</td>
                                <td>Eko Verianto, S.Kom., M.Cs.</td>
                            </tr>
                            <tr>
                                <td>PBO002</td>
                                <td>Pemrograman Berorientasi Objek</td>
                                <td>3</td>
                                <td>Ganjil 2025/2026</td>
                                <td>Dr. Bambang Suryadi, M.Kom.</td>
                            </tr>
                            <tr>
                                <td>DBS003</td>
                                <td>Desain Basis Data</td>
                                <td>3</td>
                                <td>Ganjil 2025/2026</td>
                                <td>Dr. Siti Rahayu, M.T.</td>
                            </tr>
                            <tr>
                                <td>JAR004</td>
                                <td>Jaringan Komputer</td>
                                <td>3</td>
                                <td>Ganjil 2025/2026</td>
                                <td>Ir. Andi Pratama, M.Kom.</td>
                            </tr>
                            <tr>
                                <td>AI005</td>
                                <td>Kecerdasan Buatan</td>
                                <td>3</td>
                                <td>Ganjil 2025/2026</td>
                                <td>Dr. Rina Wijayanti, M.Cs.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-info text-white">
                        <h6 class="mb-0">Informasi Kursus</h6>
                    </div>
                    <div class="card-body">
                        <p><strong>Total Mata Kuliah:</strong> 5</p>
                        <p><strong>Total SKS:</strong> 15</p>
                        <p><strong>Semester:</strong> Ganjil 2025/2026</p>
                        <p><strong>Program Studi:</strong> Informatika</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-warning text-dark">
                        <h6 class="mb-0">Aksi Cepat</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-outline-primary">Tambah Mata Kuliah</a>
                            <a href="#" class="btn btn-outline-secondary">Import dari Excel</a>
                            <a href="#" class="btn btn-outline-success">Export ke PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endsection