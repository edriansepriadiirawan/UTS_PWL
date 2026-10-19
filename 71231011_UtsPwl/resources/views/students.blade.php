@extends('main.parent')
@section('title', 'Students - UTS PWL')

@section('content')
    @include('main.nav-content')
    @section('child-content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="bi bi-people me-2"></i> Students</h2>
            <span class="badge bg-success">Active</span>
        </div>
        
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Daftar Mahasiswa</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Program Studi</th>
                                <th>Angkatan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>71231001</td>
                                <td>Adi Nugroho</td>
                                <td>Informatika</td>
                                <td>2023</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231002</td>
                                <td>Bima Pratama</td>
                                <td>Informatika</td>
                                <td>2023</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231003</td>
                                <td>Cahyo Saputra</td>
                                <td>Sistem Informasi</td>
                                <td>2023</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231004</td>
                                <td>Deni Kurniawan</td>
                                <td>Informatika</td>
                                <td>2023</td>
                                <td><span class="badge bg-warning text-dark">Cuti</span></td>
                            </tr>
                            <tr>
                                <td>71231005</td>
                                <td>Eka Putri</td>
                                <td>Teknik Komputer</td>
                                <td>2023</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231006</td>
                                <td>Fajar Hidayat</td>
                                <td>Informatika</td>
                                <td>2024</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231007</td>
                                <td>Gilang Ramadhan</td>
                                <td>Sistem Informasi</td>
                                <td>2024</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231008</td>
                                <td>Hadi Saputra</td>
                                <td>Informatika</td>
                                <td>2024</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231009</td>
                                <td>Indra Wijaya</td>
                                <td>Teknik Komputer</td>
                                <td>2024</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                                <td>71231010</td>
                                <td>Joko Prasetyo</td>
                                <td>Informatika</td>
                                <td>2024</td>
                                <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary h-100">
                    <div class="card-body text-center">
                        <h3>10</h3>
                        <p class="mb-0">Total Mahasiswa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success h-100">
                    <div class="card-body text-center">
                        <h3>9</h3>
                        <p class="mb-0">Mahasiswa Aktif</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning h-100">
                    <div class="card-body text-center">
                        <h3>1</h3>
                        <p class="mb-0">Mahasiswa Cuti</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endsection