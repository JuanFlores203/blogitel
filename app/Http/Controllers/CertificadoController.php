<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index(){        //validacion
        
        return "Esta en la sección de validación, no ingreso qr";
    }
    
    public function show($gen_code){         // form

        return "leyendo qr :$gen_code";
    }

}
