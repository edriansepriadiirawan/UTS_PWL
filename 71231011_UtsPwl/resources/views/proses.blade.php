@extends('main.parent')
@section('title', 'Hasil Proses - UTS PWL 1.a')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="bi bi-check-circle me-2"></i> Hasil Proses Form (Metode {{ $metode }})</h2>
        <span class="badge bg-success">{{ $metode }}</span>
    </div>

    <div class="card">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Data</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th style="width: 30%;">Field</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td class="fw-bold">NIM</td>
                            <td>{{ $nim }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Nama</td>
                            <td>{{ $nama }}</td>
                        </tr>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection