@extends('layout.template')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
<style>
    body {
        background-color: #f8fdf9;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #2d4739;
    }

    .card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0, 64, 32, 0.05);
        background-color: #ffffff;
        overflow: hidden;
    }

    .card-header {
        background: linear-gradient(to right, #cdeee2, #dffaf1);
        color: #205d40;
        font-size: 1.25rem;
        font-weight: 600;
        padding: 1rem 1.25rem;
    }

    .table {
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .table thead {
        background-color: #d3f2e1;
        color: #14532d;
        font-weight: 600;
        border-bottom: 1px solid #c3e6cb;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #f2fdf7;
    }

    .table tbody tr:nth-child(even) {
        background-color: #e7f9f1;
    }

    .table tbody tr:hover {
        background-color: #d0f2e3;
    }

    .table img {
        border-radius: 0.5rem;
        border: 1px solid #c3e6cb;
        max-width: 100%;
        height: auto;
        transition: transform 0.3s ease;
        display: block;
        margin: auto;
    }

    .table img:hover {
        transform: scale(1.015);
    }

    .badge-date {
        background-color: #d1e7dd;
        color: #155724;
        font-size: 0.85rem;
        padding: 0.35em 0.75em;
        border-radius: 0.4em;
    }

    .container {
        padding-top: 30px;
        padding-bottom: 60px;
    }

    table.dataTable tbody td {
        vertical-align: middle;
    }
</style>
@endsection

@section('content')
<div class="container">
    {{-- Destinasi Pantai --}}
    <div class="card mb-5">
        <div class="card-header">Destinasi Pantai</div>
        <div class="card-body">
            <table class="table table-striped" id="pointstable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Dibuat</th>
                        <th>Diperbarui</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($points as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td><img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" width="180"></td>
                        <td><span class="badge-date">{{ $p->created_at }}</span></td>
                        <td><span class="badge-date">{{ $p->updated_at }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Destinasi Bendungan --}}
    <div class="card mb-5">
        <div class="card-header">Destinasi Bendungan</div>
        <div class="card-body">
            <table class="table table-striped" id="polygonstable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Dibuat</th>
                        <th>Diperbarui</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($polygons as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td><img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" width="180"></td>
                        <td><span class="badge-date">{{ $p->created_at }}</span></td>
                        <td><span class="badge-date">{{ $p->updated_at }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Rute / Polylines --}}
    <div class="card mb-5">
        <div class="card-header">Rute Wisata</div>
        <div class="card-body">
            <table class="table table-striped" id="polylinestable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Dibuat</th>
                        <th>Diperbarui</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($polylines as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td><img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" width="180"></td>
                        <td><span class="badge-date">{{ $p->created_at }}</span></td>
                        <td><span class="badge-date">{{ $p->updated_at }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
<script>
    new DataTable('#pointstable', {
        responsive: true,
        paging: true
    });
    new DataTable('#polylinestable', {
        responsive: true,
        paging: true
    });
    new DataTable('#polygonstable', {
        responsive: true,
        paging: true
    });
</script>
@endsection
