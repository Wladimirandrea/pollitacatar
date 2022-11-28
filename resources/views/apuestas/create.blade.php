@extends('layouts.master')

@section('apuestas')
<a href="{{url('apuestas')}}" class="btn btn-success float-left">Regresar</a>
<form action="{{ route('apuestas.store') }}" method="POST">
    @csrf
    <div class="form-apuesta">
        <div class="tarjeta">
            <img src="{{asset('img/ecuador.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/senegal.png')}}" alt="">
            <input type="number" name="apuesta1" class="inmarca">
            <input type="number" name="apuesta2" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/paises.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/catar.png')}}" alt="">
        <input type="number" name="apuesta3" class="inmarca">
        <input type="number" name="apuesta4" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/iran.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/eeuu.png')}}" alt="">
            <input type="number" name="apuesta5" class="inmarca">
            <input type="number" name="apuesta6" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/gales.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/inglaterra.png')}}" alt="">
            <input type="number" name="apuesta7" class="inmarca">
            <input type="number" name="apuesta8" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/tunez.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/francia.png')}}" alt="">
            <input type="number" name="apuesta9" class="inmarca">
            <input type="number" name="apuesta10" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/australia.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/dinamarca.png')}}" alt="">
            <input type="number" name="apuesta11" class="inmarca">
            <input type="number" name="apuesta12" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/polonia.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/argentina.png')}}" alt="">
            <input type="number" name="apuesta13" class="inmarca">
            <input type="number" name="apuesta14" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/arabia.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/mexico.png')}}" alt="">
            <input type="number" name="apuesta15" class="inmarca">
            <input type="number" name="apuesta16" class="inmarca2">
            <input type="hidden" name="id_resultado" value="1" class="form-control" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Apostar</button>
    </div>
</form>
@endsection
