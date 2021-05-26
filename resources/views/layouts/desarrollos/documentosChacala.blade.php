@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Chartjs',true)
@section('plugins.Sweetalert2',true)
@section('plugins.ionicon',true)
@section('content')
<div class="container-fluid">
    <div class="row"> 
        <div class="col-md bg-dark rounded">
            <embed src="../docs/Pasos.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="700px" />
            <h4 class="text-center">Planos</h4>
          </div>
          <div class="col-md bg-dark rounded">
            <embed src="../docs/Pasos.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="700px" />
            <h4 class="text-center">Contrato</h4>
          </div>
          <div class="col-md bg-dark rounded">
            <embed src="../docs/Pasos.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="700px" />
            <h4 class="text-center">Plan parcial</h4>
          </div>
    </div>
    <div class="row"> 
        <div class="col-md bg-dark rounded">
            <embed src="../docs/Pasos.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="700px" />
            <h4 class="text-center">Titulo de propiedad</h4>
          </div>
          <div class="col-md bg-dark rounded">
            <embed src="../docs/Pasos.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="700px" />
            <h4 class="text-center">Contrato</h4>
          </div>
          <div class="col-md bg-dark rounded">
           
          </div>       
    </div>
</div>

@endsection