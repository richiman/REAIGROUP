@extends('adminlte::page')
@section('plugins.Sweetalert2',true)
@section('title', 'Perfil')
@section('plugins.Chartjs',true)
@section('content')

<style>
  
</style>
<div class="container-fluid ">
    @foreach ($proyects as $item)
    <!-- Card Start -->
            <div class="card bg-dark px-2 py" >
                <div class="row ">
                <div class="col-md-7 px-2">
                    <div class="card-block px-6">
                    <h2 class=" text-bold"> {{$item->name}} </h2>
                    <h5 class="card-text text-justify"> {{$item->desc}} </h5>
                    <p class="card-text text-muted"> {{$item->explic}}  </p>
                    <br><br>
                    <form action="">
                        <a href="{{route('desarrollo.ver',$item->id)}}" class="mt-auto btn btn-primary px-5">Desarrollo</a>
                        <a href="{{route('inversion.invertir',$item->id)}}" class="mt-auto btn btn-success px-5">Invertir</a>
                        <a href="#" class="mt-auto btn btn-info px-5">Pagina web</a>
                    </form>
                    </div>
                </div>
                <!-- Carousel start -->
                <img style=" height: 300px;   margin-left: auto; margin-right: auto; " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT46-O_sN9KxdRbVL765n7j4-atMmvw9CpMek1fDcJ56cEs_qnIl7y1xYMr91X8OVGzGjE&usqp=CAU" alt="">
                <!-- End of carousel -->
                </div>
            </div>
  <!-- End of card -->
  @endforeach
</div>
@endsection
