@extends('layout.main')

@section('title','Personal')

@section('content')



<h1>Nuestro Personal</h1>
<hr>
<div class="container altura d-flex flex-column justify-content-center">

    <h2 class="text-center display-4 mb-4 mt-5 mt-md-0">DESARROLLADORES</h2>

     <main class="row">
        @foreach ($persons as $person)
        <article class="col-12 col-md-4 text-center mb-5 mb-md-0">

        <!--   <div class="border border-dark rounded rounded-3 overflow-hidden bg-dark text-white">
                <p class="fw-bold mt-5">{{strtoupper($person['Nombre'])}}</p>
                <img src="{{$person['img']}}" alt="" width="100" height="100">
                <p class="mt-3 font-monospace">{{$person['Web']}}</p>
                <ul class="list-unstyled my-5">
                    <li>{{$person['Contacto']}}</li>
                </ul>
                <a class="bg-secondary text-white py-3 d-block text-decoration-none" href="#">Más Información</a>
            </div>
        -->
            <div class="card" style="width: 18rem;">
                <img src="{{$person['img']}}" alt="" class="card-img-top" height="350rem">
                <div class="card-body">
                  <h5 class="card-title">{{strtoupper($person['Nombre'])}}</h5>
                  <p class="card-text">{{$person['Web']}}
                    {{$person['Contacto']}}</p>
                  <a href="#" class="btn btn-primary">Más Información</a>
                </div>
            </div>

        </article>
        @endforeach
    </main>

    <br>

    <h1 style="text-align: center;">CONTACTANOS</h1>
    <div aling="center">
        <a href="https://www.epn.edu.ec/"> <img src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Escudo_de_la_Escuela_Polit%C3%A9cnica_Nacional.png" alt=""
        style="     width: 15rem;
        margin-left: 40%;"> </a>
    </div>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



   <!-- <footer class="mt-5 text-center">
        <p class="text-muted">2021 - Todos los derechos reservados</p>
    </footer> -->
</div>

@endsection()
