@extends('main.parent')
@section('title', 'Grades - UTS PWL')

@section('content')
    @include('main.nav-content')
    @section('child-content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="bi bi-award me-2"></i> Grades</h2>
            <span class="badge bg-warning text-dark">Active</span>
        </div>
        
        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Nilai Mahasiswa - Pemrograman Web Lanjut</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tugas 1 (20%)</th>
                                <th>Tugas 2 (20%)</th>
                                <th>UTS (30%)</th>
                                <th>UAS (30%)</th>
                                <th>Nilai Akhir</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>71231001</td>
                                <td>Adi Nugroho</td>
                                <td>85</td>
                                <td>90</td>
                                <td>88</td>
                                <td>92</td>
                                <td><strong>89.1</strong></td>
                                <td><span class="badge bg-success">A</span></td>
                            </tr>
                            <tr>
                                <td>71231002</td>
                                <td>Bima Pratama</td>
                                <td>78</td>
                                <td>82</td>
                                <td>75</td>
                                <td>80</td>
                                <td><strong>78.7</strong></td>
                                <td><span class="badge bg-primary">B+</span></td>
                            </tr>
                            <tr>
                                <td>71231003</td>
                                <td>Cahyo Saputra</td>
                                <td>92</td>
                                <td>88</td>
                                <td>90</td>
                                <td>95</td>
                                <td><strong>91.3</strong></td>
                                <td><span class="badge bg-success">A</span></td>
                            </tr>
                            <tr>
                                <td>71231004</td>
                                <td>Deni Kurniawan</td>
                                <td>70</td>
                                <td>65</td>
                                <td>68</td>
                                <td>72</td>
                                <td><strong>68.9</strong></td>
                                <td><span class="badge bg-info">C+</span></td>
                            </tr>
                            <tr>
                                <td>71231005</td>
                                <td>Eka Putri</td>
                                <td>88</td>
                                <td>92</td>
                                <td>85</td>
                                <td>90</td>
                                <td><strong>88.7</strong></td>
                                <td><span class="badge bg-success">A</span></td>
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
                        <h6 class="mb-0">Statistik Nilai</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Rata-rata Kelas</span>
                                <span class="fw-bold">83.3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Nilai Tertinggi</span>
                                <span class="fw-bold text-success">91.3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Nilai Terendah</span>
                                <span class="fw-bold text-danger">68.9</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Standar Deviasi</span>
                                <span class="fw-bold">8.2</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-secondary text-white">
                        <h6 class="mb-0">Distribusi Grade</h6>
                    </div>
                    <div class="card-body">
                        <div class="progress mb-2" style="height: 25px;">
                            <div class="progress-bar bg-success" style="width: 60%">A (60%)</div>
                        </div>
                        <div class="progress mb-2" style="height: 25px;">
                            <div class="progress-bar bg-primary" style="width: 20%">B+ (20%)</div>
                        </div>
                        <div class="progress mb-2" style="height: 25px;">
                            <div class="progress-bar bg-info" style="width: 20%">C+ (20%)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endsection