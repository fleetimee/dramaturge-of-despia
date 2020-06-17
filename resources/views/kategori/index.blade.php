@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Tabel Kategori</h1>
                    <a href="{{ url('/kategoris/create') }}" class="btn btn-primary">Tambah Kategori</a>
                </div>

                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kategoris as $kategori)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>
                                    <a href="{{ url('/kategoris/'.$kategori->id) }}">
                                        {{ $kategori->nama_kategori }}
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">
                                Tidak ada data...
                            </td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection