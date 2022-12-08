@extends('layouts.master')

@section('apuestas')
<a href="{{url('apuestas')}}" class="btn btn-success float-left">Regresar</a>
<form action="{{ route('apuestas.update',$apuesta->id) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="form-apuesta">
        <div class="tarjeta">
            <img src="{{asset('img/croacia.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/brazil.png')}}" alt="">
            <input type="number" name="apuesta1" class="inmarca" value="{{$apuesta->apuesta1}}">
            <input type="number" name="apuesta2" class="inmarca2" value="{{$apuesta->apuesta2}}">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/paises.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/argentina.png')}}" alt="">
            <input type="number" name="apuesta3" class="inmarca" value="{{$apuesta->apuesta3}}">
            <input type="number" name="apuesta4" class="inmarca2" value="{{$apuesta->apuesta4}}">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/marruecos.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/portugal.png')}}" alt="">
            <input type="number" name="apuesta5" class="inmarca" value="{{$apuesta->apuesta5}}">
            <input type="number" name="apuesta6" class="inmarca2" value="{{$apuesta->apuesta6}}">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/inglaterra.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/francia.png')}}" alt="">
            <input type="number" name="apuesta7" class="inmarca" value="{{$apuesta->apuesta7}}">
            <input type="number" name="apuesta8" class="inmarca2" value="{{$apuesta->apuesta8}}">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/semi.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/semi.png')}}" alt="">
            <input type="number" name="apuesta9" class="inmarca" value="{{$apuesta->apuesta9}}">
            <input type="number" name="apuesta10" class="inmarca2" value="{{$apuesta->apuesta10}}">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/semi.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/semi.png')}}" alt="">
            <input type="number" name="apuesta11" class="inmarca" value="{{$apuesta->apuesta11}}">
            <input type="number" name="apuesta12" class="inmarca2" value="{{$apuesta->apuesta12}}">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/tercero.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/tercero.png')}}" alt="">
            <input type="number" name="apuesta13" class="inmarca" value="{{$apuesta->apuesta13}}">
            <input type="number" name="apuesta14" class="inmarca2" value="{{$apuesta->apuesta14}}">
        </div>
        <div class="tarjeta">
            <img src="{{asset('img/final.png')}}" alt="">
            <h5>VS</h5>
            <img src="{{asset('img/final.png')}}" alt="">
            <input type="number" name="apuesta15" class="inmarca" value="{{$apuesta->apuesta15}}">
            <input type="number" name="apuesta16" class="inmarca2" value="{{$apuesta->apuesta16}}">

        </div>
        <button type="submit" class="btn btn-primary">Apostar</button>
    </div>
</form>
@endsection

