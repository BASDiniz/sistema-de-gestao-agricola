@extends('layouts.app')

@section('content')
<div class="container-conteudo">
    <div class = 'jumbotron' id="jumbotron">
        <div id = 'cabecalho'>
    {{-- @if($usuario->tipo_perfil == "Coordenador")
            @if ($reuniao->registrada == false)
                <a type="button" class="btn btn-success" href="{{route('user.coordenador.verReuniao.criarReuniao', ['id_reuniao' => $reuniao->id])}}" >Registrar reunião</a>
                <a type="button" class="btn btn-danger" href="{{route('user.coordenador.verReuniao.cancelarReuniao', ['id_reuniao' => $reuniao->id])}}" >Cancelar reunião</a>
            @endif
    @endif --}}

            <h3 class="marker">Informações da reunião</h3>
            <div class="row">
                <div class="col-md-4"> <br>
                    <h4 class="label-static">Nome</h4>
                    <label for="">{{$reuniao->nome}}</label>
                </div>
                <div class="col-md-4"> <br>
                    <h4 class="label-static">Data</h4>
                    <label for="">{{$reuniao->data}}</label>
                </div>

                <div class="col-md-4">
                    <h4 class="label-static">Local</h4>
                    <label for="">{{$reuniao->local}}</label>
                </div>
            </div>
            @if ($reuniao->registrada == true)
                <div class="row">
                    <div class="col-md-4"> <br>
                        <h4 class="label-static">Participantes</h4>
                        @php
                            $nomeParticipantes = explode('/', $reuniao->reuniaoRegistrada->participantes);
                        @endphp
                        @foreach ($nomeParticipantes as $nome)
                            @if ($nome != "")
                                <label for="">{{$nome}}</label><br>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-4"> <br>
                        <h4 class="label-static">Ata</h4>
                        <label for="">{{$reuniao->reuniaoRegistrada->ata}}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"> <br>
                        <h4 class="label-static">Fotos</h4>
                        @foreach ($reuniao->reuniaoRegistrada->fotosReuniao as $fotoReuniao)
                            <img src="{{asset('storage/' . $fotoReuniao->path)}}" alt="" width="1000px" height="600px"> <br> <br>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection