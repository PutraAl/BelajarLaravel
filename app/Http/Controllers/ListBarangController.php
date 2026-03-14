<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    function tampilkan($id, $nama, $kategori, $harga, $jumlah){
        return view('list_barang', [
            'id' => $id,
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'jumlah' => $jumlah
            
            ]);
    }
}
