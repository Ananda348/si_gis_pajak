<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $data = [
            'tittle' => 'Pemetaan',
        ];
        return view('v_web', $data);
    }
}
