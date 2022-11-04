@extends('layouts.plantilla1')

@section('title','SHOW')

@section('content')
    <div class="container">
        <form>
            <H1> GEN_CODE: {{$code}} </H1>

            <div class="logoitel">
                Aqui va la imagen del logo de ITEL UNJBG
                Aquí mero
            </div>
            <fieldset disabled>
                <legend>Datos del Documento Verificado</legend>
                @foreach ($Certificado_qr as $item)
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Código de certificado:</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$item->certificado_code}}">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Razón:</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$item->razon}}">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nombre:</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$item->nombre_est}}">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Apellido:</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$item->apellido_est}}">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Fecha emisión:</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ \Carbon\Carbon::parse($item->fecha_emision)->format('d-m-Y')}}">
                    </div>
                @endforeach
                <!-- <div class="mb-3">
                    <label for="disabledSelect" class="form-label"> Razon </label>
                    <select id="disabledSelect" class="form-select">
                        <option>Ejemplo: Certificado de la carrera de Técnico en Diseño Gráfico</option>
                        <option>Disabled select</option>
                    </select>
                    
                </div>-->
                <!--<div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                        </label>
                    </div>
                </div>-->
                <button type="submit" class="btn btn-success">Ver Documento</button>
            </fieldset>
        </form>
    </div>
    
    {{-- <div class="container2">
        <ul>
            @foreach ($Certificado_qr as $item)
                <li>{{$item->razon}}</li>                
            @endforeach
        </ul>
    </div> --}}
@endsection

 





