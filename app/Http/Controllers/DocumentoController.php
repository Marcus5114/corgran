<?php

namespace App\Http\Controllers;

use App\Documento;
use App\Models\Prueba;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Documentocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documento::orderBy('id','desc')->paginate(5);
        return view('documentos', compact('documentos'));
    }

  
}
