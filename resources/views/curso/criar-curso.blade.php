@extends('layouts.main')

@section('title', 'Criar Curso')

@section('conteudo')
<main id="main" class="main" >
@if (session()->has('erro'))
<div class="alert alert-danger">
    {{session('erro')}}
</div>
@endif
@if (session()->has('sucesso'))
<div class="alert alert-success">
    {{session('sucesso')}}
</div>
@endif
    <form id="regFormh" action="{{route('cadastrar.curso')}}" class="formulario-layout" method="POST">
        @csrf
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR CURSO</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" value="{{old('nome_curso')}}" placeholder="Nome do Curso" name="nome_curso" id="nome_curso" oninput="this.className = ''" required >
                <span id=" erro_nome"  style="color: red"></span>
            </div>

            <div class="row">
                <div class="col form-group">
                    <select name="area_formacao" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Area de Formação:</option>
                        @foreach ($areaFormacao as $af)
                            <option value="{{$af->area_formacao_id}}">{{$af->nome_area_formacao}}</option>
                        @endforeach
                    </select>
                </div>

                <div class=" col form-group">
                    <select name="coordenador" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Coordenador:</option>
                        @foreach ($coordenador as $coord)
                            <option value="{{$coord['professor_id']}}">{{$coord['pessoa']['nome_completo']}}</option>
                        @endforeach

                    </select>
                </div>

            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" value="{{old('sigla_curso')}}" placeholder="Sigla do Curso" name="sigla_curso" id="nome_sigla" oninput="this.className = ''" maxlength="4" required>
                <span id=" erro_sigla"  style="color: red"></span>
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Criar Curso</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
