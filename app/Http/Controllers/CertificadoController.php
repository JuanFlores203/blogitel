<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index(){        //validacion        
        return view('certificado.index');
    }

    public function show(){        //form        
        return view('certificado.show');
        
    }
    
    public function create($gen_code){         // form + gen_code
        return view('certificado.create', ['code' => $gen_code]);
    }

}
