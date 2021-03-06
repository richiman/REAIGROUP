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
            <div class="card bg-dark px-3 py-2" >
                <div class="row ">
                <div class="col-md-8 px-2">
                    <div class="card-block px-6">
                    <h2 class=" text-bold"> {{$item->name}} </h2>
                    <h5 class="card-text text-justify"> {{$item->desc}} </h5>
                    <p class="card-text text-muted"> {{$item->explic}}  </p>
                    <br><br>
                    <form class="text-center" action="">
                        <a href="{{route('desarrollo.ver',$item->id)}}" class="mt-auto btn btn-primary btn-sm px-3">Desarrollo</a>
                        <a href="{{route('inversion.invertir',$item->id)}}" class="mt-auto btn btn-success btn-sm px-3">Invertir</a>
                        <input class="mt-auto btn btn-info btn-sm px-3" type="button" value="Web del proyecto" onclick="window.open('http://{{$item->link}}')">
                    </form>
                    <br>
                    </div>
                </div>
               
                <!-- Carousel start -->
                <img style=" width: 100%; height: auto; max-width: 400px;" class="rounded float-right" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT46-O_sN9KxdRbVL765n7j4-atMmvw9CpMek1fDcJ56cEs_qnIl7y1xYMr91X8OVGzGjE&usqp=CAU" alt="">
                <!-- End of carousel -->
                </div>
            </div>
  <!-- End of card -->
  @endforeach
</div>
@endsection
