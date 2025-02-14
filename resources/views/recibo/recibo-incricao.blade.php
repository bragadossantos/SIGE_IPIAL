@extends('layouts.doc')

@section('title', 'Recibo de Inscrição')

@section('conteudo')
<main id="main" class="main" style="margin-left: 0;">
    <div class="container no-print" style="margin-top: -20px;">
        <div class="row">
            <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                <a href="#"><i class="voltar bi bi-arrow-left-circle-fill"></i></a>
                <h1>Recibo de Inscrição</h1>      
            </div>
        
            <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
                <button class="btn-imprimir" id="gerar-recibo">Gerar Recibo <i class="bi bi-file-earmark-pdf"></i></button>
            </div>
        </div>
    </div>

    <!--Inicio do recibo inscricao -->
    <div id="recibo-pdf">
        <table class="recibo-insc" id="recibo-insc"  style="text-align: left; width: 65%; margin: auto; margin-top: 40px; color: #000; font-size: 12pt;">
            <thead class="cabecalho-recibo-insc" style="text-align: center; font-size: 17px;">
                <tr>
                <th rowspan="3" class="logo-reciboBLI" style="width: 100px;">
                    <span id="logo-reciboBLISS"></span>
                    <img src="assets/img/logo.png" width="100px" height="50px">
                </th>
                <th>
                    <span class="tx-cab-mp">INSTITUTO POLITÉCNICO INDUSTRIAL Nº 1.225 - ALDA LARA</span>
                </th>
                </tr>
                
                <tr>
                <th>
                    <span class="tx-cab-mp">RECIBO DA FICHA DE CANDIDATURA DOS CURSOS DA FORMAÇÃO MÉDIA TÉCNICA</span>
                </th>
                </tr>
                
                <tr>
                <th>
                    <span class="tx-cab-mp">Ano lectivo 2022-2023</span>
                </th>
                </tr>
            </thead>
            <tbody class="corpo-recibo-insc">
                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>Nome</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 100%;"></div>
                    </div>
                </th>
                </tr>
                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>Data de nascimento</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>/
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>/
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
                    <span>Idade (até Dezembro de 2022):</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
                    <span>anos, Sexo</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
                    </div>
                </th>
                </tr>

                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>O Funcionario</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 355px;"></div>
                    <span>Data</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
                    <span>DOC.IPIAL/2022</span>
                    </div>
                </th>
                </tr>
                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>1ª Opção</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 160px;"></div>
                    <span>2ª Opção</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 160px;"></div>
                    <span>3ª Opção</span>
                    <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 160px;"></div>
                    <span>4ª Opção</span>
                    </div>
                </th>
                </tr>
                <tr>
                <th colspan="2" style="text-align: center; font-size: 16px;">
                    <strong>OBS: É obrigatório a apresentação do recibo de INCRIÇÃO em caso de qualquer reclamação</strong>
                </th>
                </tr>

            </tbody>
        </table>

    </div>
    <!--Fim recibo de inscricao-->
    <br><br>
</main>
@endsection