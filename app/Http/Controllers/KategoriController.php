<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;

class KategoriController extends Controller
{

    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
        $this->middleware('auth');
    } 

   public function index()
   {
    $data = [
        'tittle' => 'Kategori Pajak',
        'kategori' => $this->KategoriModel->AllData(),
    ];
    return view('admin.kategori.v_index', $data);
   }

   public function add()
   {
    $data = [
        'tittle' => 'Add Data Kategori Pajak',
    ];
    return view('admin.kategori.v_add', $data);
   }

   public function insert()
   {
       Request()->validate([
           'kategori' => 'required',
       ],
       [
           'kategori.required' => 'Wajib Diisi !',
       ]
    );
    $data = [
        'nama_kategori' => Request()->kategori
    ];
    $this->KategoriModel->InsertData($data);
    return redirect()->route('kategori')->with('pesan', 'Data Berhasil Di Tambahkan !');
   }
}
