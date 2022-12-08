@extends('layouts.master')

@section('apuestas')
<a href="{{url('apuestas')}}" class="btn btn-success float-left">Regresar</a>
<form action="{{ route('resultados.update',$resultado->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-apuesta">
        <div class="tarjeta">
            <img src="{{asset('img/croacia.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/brazil.png')}}" alt="">
            <input type="number" name="resultado1" value="{{ $resultado->resultado1 }}" class="inmarca">
            <input type="number" name="resultado2" value="{{ $resultado->resultado2 }}" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/paises.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/argentina.png')}}" alt="">
        <input type="number" name="resultado3" value="{{ $resultado->resultado3 }}" class="inmarca">
        <input type="number" name="resultado4" value="{{ $resultado->resultado4 }}" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/marruecos.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/portugal.png')}}" alt="">
            <input type="number" name="resultado5" value="{{ $resultado->resultado5 }}" class="inmarca">
            <input type="number" name="resultado6" value="{{ $resultado->resultado6 }}" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/inglaterra.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/francia.png')}}" alt="">
            <input type="number" name="resultado7" value="{{ $resultado->resultado7 }}" class="inmarca">
            <input type="number" name="resultado8" value="{{ $resultado->resultado8 }}" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/semi.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/semi.png')}}" alt="">
            <input type="number" name="resultado9" value="{{ $resultado->resultado9 }}" class="inmarca">
            <input type="number" name="resultado10" value="{{ $resultado->resultado10 }}" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/semi.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/semi.png')}}" alt="">
            <input type="number" name="resultado11" value="{{ $resultado->resultado11 }}" class="inmarca">
            <input type="number" name="resultado12" value="{{ $resultado->resultado12 }}" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/tercero.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/tercero.png')}}" alt="">
            <input type="number" name="resultado13" value="{{ $resultado->resultado13 }}" class="inmarca">
            <input type="number" name="resultado14" value="{{ $resultado->resultado14 }}" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/final.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/final.png')}}" alt="">
            <input type="number" name="resultado15" value="{{ $resultado->resultado15 }}" class="inmarca">
            <input type="number" name="resultado16" value="{{ $resultado->resultado16 }}" class="inmarca2">
            <input type="hidden" name="id_resultado" value="1" class="form-control" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Apostar</button>
    </div>
</form>
@endsection


