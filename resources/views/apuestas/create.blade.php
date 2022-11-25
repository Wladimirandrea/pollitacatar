@extends('layouts.master')

@section('apuestas')
<a href="{{url('apuestas')}}" class="btn btn-success float-left">Regresar</a>
<form action="{{ route('apuestas.store') }}" method="POST">
    @csrf
    <div class="form-apuesta">
        <div class="tarjeta">
            <img src="img/tunez.png" alt="">
            <h5>VS</h5>
            <img src="img/australia.png" alt="">
            <input type="number" name="apuesta1" class="inmarca">
            <input type="number" name="apuesta2" class="inmarca2">
        </div>
        <div class="tarjeta">
        <img src="img/polonoa.png" alt="">
        <h5>VS</h5>
        <img src="img/arabia.png" alt="">
        <input type="number" name="apuesta3" class="inmarca">
        <input type="number" name="apuesta4" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="img/francia.png" alt="">
            <h5>VS</h5>
            <img src="img/dinamarca.png" alt="">
            <input type="number" name="apuesta5" class="inmarca">
            <input type="number" name="apuesta6" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="img/argetina.png" alt="">
            <h5>VS</h5>
            <img src="img/mexico.png" alt="">
            <input type="number" name="apuesta7" class="inmarca">
            <input type="number" name="apuesta8" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="img/japon.png" alt="">
            <h5>VS</h5>
            <img src="img/costarica.png" alt="">
            <input type="number" name="apuesta9" class="inmarca">
            <input type="number" name="apuesta10" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="img/belgica.png" alt="">
            <h5>VS</h5>
            <img src="img/marruecos.png" alt="">
            <input type="number" name="apuesta11" class="inmarca">
            <input type="number" name="apuesta12" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="img/croacia.png" alt="">
            <h5>VS</h5>
            <img src="img/canada.png" alt="">
            <input type="number" name="apuesta13" class="inmarca">
            <input type="number" name="apuesta14" class="inmarca2">
        </div>
        <div class="tarjeta">
            <img src="img/españa.png" alt="">
            <h5>VS</h5>
            <img src="img/alemania.png" alt="">
            <input type="number" name="apuesta15" class="inmarca">
            <input type="number" name="apuesta16" class="inmarca2">
            <input type="hidden" name="id_resultado" value="1" class="form-control" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Apostar</button>
    </div>
</form>
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('apuestas.store') }}" method="POST">

                        @csrf



                         <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-group">

                                    <strong><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/200px-Flag_of_Morocco.svg.png" width="50px" alt=""></strong>

                                    <input type="text" name="apuesta1" class="form-control">

                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-group">

                                    <strong><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/1280px-Flag_of_Croatia.svg.png" width="50px" alt=""></strong>

                                    <input type="text" name="apuesta2" class="form-control">


                                </div>

                            </div>
                            <br>
                            <br>
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">

                                        <strong><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/640px-Flag_of_Germany.svg.png" width="50px" alt=""></strong>

                                        <input type="text" name="apuesta3" class="form-control">

                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">

                                        <strong><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/200px-Flag_of_Japan.svg.png" width="50px" alt=""></strong>

                                        <input type="text" name="apuesta4" class="form-control">


                                    </div>

                                </div>

                                <br>
                                <br>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Bandera_de_Espa%C3%B1a.svg/1200px-Bandera_de_Espa%C3%B1a.svg.png" width="50px" alt=""></strong>

                                            <input type="text" name="apuesta5" class="form-control">

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Costa_Rica.svg/2560px-Flag_of_Costa_Rica.svg.png" width="50px" alt=""></strong>

                                            <input type="text" name="apuesta6" class="form-control">

                                        </div>

                                    </div>

                                    <br>
                                    <br>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                            <div class="form-group">

                                                <strong><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_Belgium_%28civil%29.svg/1200px-Flag_of_Belgium_%28civil%29.svg.png" width="50px" alt=""></strong>

                                                <input type="text" name="apuesta7" class="form-control">

                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                            <div class="form-group">

                                                <strong><img src="https://static.vecteezy.com/system/resources/previews/001/218/820/non_2x/illustration-of-canada-flag-vector.jpg" width="50px" alt=""></strong>

                                                <input type="text" name="apuesta8" class="form-control">
                                                <input type="hidden" name="id_resultado" value="1" class="form-control" placeholder="Name">
                                            </div>

                                        </div>



                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                    <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                        </div>



                    </form>
                </div>


            </div>
        </div>
    </div>

</div>
 --}}
