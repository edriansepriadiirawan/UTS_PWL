@extends('main.parent')
@section('title', 'Form Mahasiswa - UTS PWL 1.a')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="bi bi-person-plus me-2"></i> Form mahasiswa</h2>

    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Input Data Mahasiswa</h5>
        </div>
        <div class="card-body">
            <form action="/proses" method="POST" class="needs-validation" novalidate>
                @csrf
                
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label fw-bold">NIM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nim" name="nim" 
                               placeholder="Masukkan NIM (8 digit)" required min="10000000" max="99999999">
                        <div class="invalid-feedback">NIM wajib diisi (8 digit angka)</div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" 
                               placeholder="Masukkan Nama Lengkap" required maxlength="100">
                        <div class="invalid-feedback">Nama wajib diisi</div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-send me-2"></i>Kirim Data
                        </button>
                        <a href="/courses" class="btn btn-secondary btn-lg ms-2">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection