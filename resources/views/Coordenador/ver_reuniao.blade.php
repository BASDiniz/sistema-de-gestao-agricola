@extends('layouts.app')

@section('content')
<div class = 'jumbotron bg-white'>
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
    <div class="row">
        <div class="col-md-4"> <br>
            <h4 class="label-static">Partcipantes</h4>
            @php
                $nomeParticipantes = explode('/', $reuniao->participantes);
            @endphp
            @foreach ($nomeParticipantes as $nome)
                @if ($nome != "")
                    <label for="">{{$nome}}</label><br>
                @endif
            @endforeach
        </div>
        <div class="col-md-4"> <br>
            <h4 class="label-static">Ata</h4>
            <label for="">{{$reuniao->ata}}</label>
        </div>
    </div>
</div>
@endsection