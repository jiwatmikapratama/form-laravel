@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-5">
            <a href="/create" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Data
            </a>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil Ditambahkan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table text-center mt-2">
            <thead>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Hobi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($mahasiswa_list as $mahasiswa)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $mahasiswa['nama'] }}</td>
                        <td>{{ $mahasiswa['tempatlahir'] }}</td>
                        <td>{{ $mahasiswa['tanggallahir'] }}</td>
                        <td>{{ $mahasiswa['jeniskelamin'] }}</td>
                        <td>{{ $mahasiswa['prodi'] }}</td>
                        <td>
                            @php
                                $hobies = json_decode($mahasiswa['hobi']);
                            @endphp

                            @foreach ($hobies as $hobi)
                                {{ $loop->iteration }}. {{ $hobi }} </br>

                            @endforeach
                        </td>
                        <td>{{ $mahasiswa['alamat'] }}</td>
                        <td>{{ date_diff(date_create($mahasiswa['tanggallahir']), date_create(date('Y-m-d')))->format('%y') }}
                            tahun</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
