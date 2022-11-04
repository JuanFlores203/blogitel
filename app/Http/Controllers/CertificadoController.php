<?php

namespace App\Http\Controllers;

use App\Models\Certificado_qr;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index(){        //validacion        
        
        return view('certificado.index');
    }

    public function show($gen_code = null){         // form + gen_code

        $Certificado_qr = Certificado_qr::select(
                                                    'fecha_emision',
                                                    'certificado_code',
                                                    'razon',
                                                    'nombre_est',
                                                    'apellido_est',
                                                    'estudiante_code',
                                                    'gen_code',
                                                    'descripcion',
                                                    'access_token',
                                                )->where('gen_code',$gen_code)->get();        
        
        if($gen_code){
            return view('certificado.show', ['code' => $gen_code], compact('Certificado_qr'));
        }else{
            $gen_code = "";
            $Certificado_qr = "";
            return view('certificado.index');}
        
    }

    //public function create($gen_code = null){         // form + gen_code
    //    if($gen_code){
    //        return view('certificado.create', ['code' => $gen_code]);
    //    }else{return view('certificado.show'); }
    //    
    //}

}
