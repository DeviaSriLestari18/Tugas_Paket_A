@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Data Siswa
                    <a href="{{route('siswa.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>foto</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            @php $no =1; @endphp
                            <tbody>
                            @foreach ($siswa as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nis}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->kelas}}</td>
                                <td>{{$item->agama}}</td>
                                <td>{{$item->alamat}}</td>
                                <td align="center"><img src="{{ asset ('images/siswa/' .$item->foto)}}" style="width:50px;" alt=""></td>
                                <td>
                                    <form action="{{route('siswa.destroy',$item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('siswa.edit', $item->id)}}" class="btn btn-sm btn-success">Edit
                                    </a>
                                    <a href="{{route('siswa.show', $item->id)}}" class="btn btn-sm btn-warning">Show
                                    </a>
                                    <button class="btn btn-sm btn-danger" type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
