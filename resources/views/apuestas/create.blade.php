@extends('layouts.master')

@section('apuestas')
<a href="{{url('apuestas')}}" class="btn btn-success float-left">Regresar</a>
<form action="{{ route('apuestas.store') }}" method="POST">
    @csrf
    <div class="form-apuesta">
        <div class="tarjeta">
            <img src="{{asset('img/croacia.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/brazil.png')}}" alt="">
            <input type="number" name="apuesta1" class="inmarca">
            <input type="number" name="apuesta2" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/paises.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/argentina.png')}}" alt="">
            <input type="number" name="apuesta3" class="inmarca">
            <input type="number" name="apuesta4" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/marruecos.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/portugal.png')}}" alt="">
            <input type="number" name="apuesta5" class="inmarca">
            <input type="number" name="apuesta6" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/inglaterra.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/francia.png')}}" alt="">
            <input type="number" name="apuesta7" class="inmarca">
            <input type="number" name="apuesta8" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/semi.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/semi.png')}}" alt="">
            <input type="number" name="apuesta9" class="inmarca" disabled>
            <input type="number" name="apuesta10" class="inmarca2" disabled>
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/semi.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/semi.png')}}" alt="">
            <input type="number" name="apuesta11" class="inmarca" disabled>
            <input type="number" name="apuesta12" class="inmarca2" disabled>
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/tercero.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/tercero.png')}}" alt="">
            <input type="number" name="apuesta13" class="inmarca" disabled>
            <input type="number" name="apuesta14" class="inmarca2" disabled>
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/final.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/final.png')}}" alt="">
            <input type="number" name="apuesta15" class="inmarca" disabled>
            <input type="number" name="apuesta16" class="inmarca2" disabled>
            <input type="hidden" name="id_resultado" value="1" class="form-control" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Apostar</button>
    </div>
</form>
@endsection
