@extends('layouts.app')

@section('content')
<div class="container-main">
    <div class="row upper-div-2">
        <div class="col-md-3 img-left">

        </div>
        <div class="col-md-9">
            <br>

            <h1 class="marker">Editar Perfil</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="padding: 0px;">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form class="formulario" method="post" action="{{ route('user.salvar_editar_perfil') }}">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="label-static" for="nome">Nome Completo</label>
                        <input type="text" class="form-control input-stl" id="nome" name="nome" placeholder="Nome Completo" value="{{ old('nome', $produtor->nome) }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="label-static" for="Email">Email</label>
                        <input type="email" class="form-control input-stl" id="email" name="email" placeholder="Email" value="{{ old('email', $produtor->email) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-4">
                        <label class="label-static" for="data de nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control input-stl" name="data_nascimento" value="{{ old('data_nascimento', $produtor->data_nascimento) }}">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="label-static">RG</label>
                        <input type="number" class="form-control input-stl" name="rg" placeholder="RG" value="{{ old('rg', $produtor->rg) }}">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="label-static">CPF</label>
                        <input type="number" class="form-control input-stl" name="cpf" placeholder="CPF" value="{{ old('cpf', $produtor->cpf) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-7 mb-3">
                        <label class="label-static">Nome do Conjuge</label>
                        <input type="text" class="form-control input-stl" id="nome_conjuge" name="nome_conjugue" placeholder="Nome do Conjuge" value="{{ old('nome_conjuge', $produtor->nome_conjuge) }}">
                    </div>
                    <div class="col-md-5 mb-3">
                        <label class="label-static">Telefone</label>
                        <input type="tel" class="form-control input-stl" id="telefone" name="telefone" placeholder="Telefone" value="{{ old('telefone', $produtor->telefone) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="label-static">Nome dos Filhos</label>
                    <textarea class="form-control input-stl" id="nome-filhos" name="nome_filhos" placeholder="Nome dos Filhos" rows="2"> {{$produtor->nome_filhos}} </textarea>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <label class="label-static">Rua</label>
                        <input type="text" class="form-control input-stl" name="nome_rua" placeholder="Rua" value="{{ old('nome_rua', $produtor->endereco->nome_rua) }}">
                    </div>
                    <div class="col-md-2 mb-4">
                        <label class="label-static">Numero</label>
                        <input type="number" class="form-control input-stl" name="numero_casa" placeholder="Numero" value="{{ old('numero_casa', $produtor->endereco->numero_casa) }}">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="label-static">Bairro</label>
                        <input type="text" class="form-control input-stl" name="bairro" placeholder="Bairro" value="{{ old('bairro', $produtor->endereco->bairro) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="label-static">Cidade</label>
                        <input type="text" class="form-control input-stl" id="cidade" name="cidade" placeholder="Cidade" value="{{ old('cidade', $produtor->endereco->cidade) }}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="label-static">Estado</label>
                        <select class="custom-select input-stl" id="estado" name="estado" placeholder="Estado">
                            <option selected disabled value="">Selecionar Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="label-static" for="cep">CEP</label>
                        <input type="text" class="form-control input-stl" id="cep" name="cep" placeholder="" value="{{ old('cep', $produtor->endereco->cep) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="label-static">Ponto de Referencia</label>
                    <textarea class="form-control input-stl" id="ponto_referencia" name="ponto_referencia" rows="1">{{$produtor->endereco->ponto_referencia}}</textarea>
                </div>

                <div class="form-group">
                    <label class="label-static">Descrição</label>
                    <textarea class="form-control input-stl" id="descricao" name="descricao" rows="3">{{$produtor->endereco->descricao}}</textarea>
                </div>

                <button class="btn botao-submit" type="submit">Finalizar Editar</button>
                <br>
                <br>
            </form>
        </div>
    </div>
</div>

@endsection
