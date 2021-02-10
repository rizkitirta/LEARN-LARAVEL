@extends('admin.adm-main');
@section('admin-content');

    <div class="container">
        <h2>Data Pesanan</h2>
        @if (session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Pesanan</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesan as $x)
                    <tr>
                        <th scope="row">{{ $loop->iteration }} </th>
                        <td>{{ $x->nama_depan }}</td>
                        <td>{{ $x->pesan }}</td>
                        <td>{{ $x->email }}</td>
                        <td>{{ $x->nohp }}</td>
                        <td> 
							<a href="{{ route('edit',$x->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a> |
                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
