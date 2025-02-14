@extends('layouts.main')

@section('title', 'Cadastrar professor')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action={{ route('prof.postRegistar') }} id="regForm" action="" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <!-- <span class="step"></span> -->
        </div>
 
        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">introduza os dados pessoais </h2>
          
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
          @endif

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <input name='nome_completo' type="text" class="input-sm" placeholder="Nome Completo do professor" name="" oninput="this.className = ''">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <input name='formacao' type="text" class="input-sm" placeholder="Formação do professor" oninput="this.className = ''">
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <input name='num_bi' type="text" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <input name='data_nascimento' type="date" oninput="this.className = ''">
              </div> 
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" class="form-control" readonly="true" disabled oninput="this.className = ''" value="00">
              </div> 
            </div>
          </div>

 
          <div class="row d-flex align-items-center">
            <div class="col-md-4">
              <div class="form-group">
                <label class="me-3">Sexo:</label>
                <input type="radio" id="masculino" name="genero" value="Masculino" {{ old('genero') == 'Masculino' ? 'checked' : '' }}>
                <label for="masculino" class="me-2"> Masculino</label>
                <input type="radio" id="feminino" name="genero" value="Femenino" {{ old('genero') == 'Femenino' ? 'checked' : '' }}>
                <label for="feminino"> Feminino</label>
              </div>
            </div>

            <div class="col-md-8" style=" display: flex; justify-content: flex-end;align-items: center; gap: 10px;">
            <h5>Endereço</h5>
              <div class="form-group">
                <input name='municipio' type="text" placeholder="Municipio" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='bairro' type="text" placeholder="Bairro" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='zona' type="text" placeholder="Zona" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='numero_casa' type="text" placeholder="Nº Casa" required='false' oninput="this.className = ''">
              </div> 
            </div>
          </div>

          <div class="row">
            <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                <span style="color: #777;">+244</span>
                <input name='num_tel' type="text" name="" placeholder="Telefone" oninput="this.className = ''">
              </div>

              <div class="col-3">
                  <i id="clonebtn1"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
              </div>
          </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">disciplinas a lecionar</h2>
          <div class="form-group">
            <select name='curso' oninput="this.className = ''" class="form-select">
              <optgroup label="Curso">

                @foreach ($cursos as $curso)
                  <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                @endforeach
                
              </optgroup>
            </select>
          </div>

          <div class="row">
            <div class="form-group col">
              <select oninput="this.className = ''" class="form-select">
                <optgroup label="Turno">
                  <option>Manhã</option>
                  <option>Tarde</option>
                  <option>Noite</option>
                </optgroup>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col">
              <select name='disciplina' oninput="this.className = ''" class="form-select">
                <optgroup label="Disciplinas">
                  @foreach($disciplinas as $disciplina)
                    <option value="{{ $disciplina->disciplina_id }}">{{ $disciplina->nome_disciplina }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="form-group col-12 mb-3 w-100">
              <input type="number" placeholder="Quantidade de disciplinas" id="quantidade-de-disciplinas" min="1" value="1" max="4" required='false'>
            </div>
          </div>
        </div>

        <!--<div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações importantes para o instituto</h2>

          <div class="form-group col">
            <select oninput="this.className = ''" class="form-select" id="select-cargo-cadastrar-professor">
              <optgroup label="Cargo">
                <option>Professor</option>
                <option>Coordenador do curso</option>
                <option>Coordenador da área de formação</option>
              </optgroup>
            </select>
          </div>

          <div class="col mb-3 d-none" id="div-do-select-do-curso">
            <select oninput="this.className = ''" class="form-select">
              <optgroup label="Curso">
                <option value="Desenhador Projectista">Desenhador Projetista</option>
                <option value="Técnico de Energia e Instalações Eléctricas">Técnico de Energia e Instalações Eléctricas</option>
                <option value="Técnico de Informática ">Técnico de Informática</option>
                <option value="Electrônica e Telecomunicação">Electrônica e Telecomunicação</option>
              </optgroup>
            </select>
          </div>

          <div class="col mb-3 d-none" id="div-do-select-da-area-de-formacao">
            <select oninput="this.className = ''" class="form-select">
              <optgroup label="Área de formação">
                  <option value="Informática">Informática</option>
                  <option value="Contrução civil">Electricidade</option>
                  <option value="Eletronica">Electrônica</option>
                  <option value="Contrução civil">Construção civil</option>
              </optgroup>
            </select>
          </div>

          <div class="form-group">
            <input type="email" placeholder="E-mail do professor" oninput="this.className = ''">
          </div>
        </div> -->

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>


    </main>
@endsection