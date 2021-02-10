@extends('admin.adm-main')
@section('admin-content')

    <div class="container">
        <h2>Data Pesanan</h2>
        @if (session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{ session('successMsg') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr class="bg-dark text-white">
                    <th scope="col">No</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Harga</th>
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
                        <td>{{ $x->alamat }}</td>
                        <td>{{ $x->barang->nama_barang }}</td>
                        <td>{{ number_format($x->barang->harga) }}</td>
                        <td>{{ $x->email }}</td>
                        <td>{{ $x->nohp }}</td>
                        <td>
                            <a href="{{ route('edit', $x->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i>
                                Edit</a> |

                            <form method="POST" id="delete-form-{{ $x->id }}"
                                action="{{ route('delete', $x->id) }} " style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                            </form>
                            <a onclick=" if(confirm('Hapus pesanan')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $x->id }}').submit();
                               }else
                               { event.preventDefault(); }							
                               
                               " href="" class="btn btn-danger"><i class="fas fa-trash"></i>
                                Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
