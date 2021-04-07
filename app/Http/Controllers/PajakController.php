<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PajakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

   public function index()
   {
    $data = [
        'tittle' => 'Aset Pajak',
    ];
    return view('admin.asetpajak/v_index', $data);
   }
}
