<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('create');
    }

     public function thanks()
    {
        return view('thanks');
    }

    public function store(Request $request)
    {
     $this->validate($request, [
         'namadepan' => 'required',
         'namabel' => 'required',
         'pesan' => 'required',
         'email' => 'required',
         'nohp' => 'required'
     ]);

     $pesan = new Pesan;
     $pesan->nama_depan = $request->namadepan;
     $pesan->nama_bel = $request->namabel;
     $pesan->pesan = $request->pesan;
     $pesan->email = $request->email;
     $pesan->nohp = $request->nohp;
     $pesan->save();
     return redirect(route('thanks'))->with('successMsg', 'Pesanan Berhasil Ditambahkan!');
    }

    public function show()
    {
        $pesan = Pesan::all();
        return view('admin.adm-tampil', compact('pesan'));
    }

   
}
