@extends('layouts.master')

@section('content')
<div class="tab-content" id="nav-tabContent">
    <!-- PRINCIPAL -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="apuesta-resultado">
        <div class="botones-juegos">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn1.png')}}" alt="" id="pills-juego1-tab" data-bs-toggle="pill" data-bs-target="#pills-juego1" type="button" role="tab" aria-controls="pills-juego1" aria-selected="true">
            </li>
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn2.png')}}" id="pills-juego2-tab" data-bs-toggle="pill" data-bs-target="#pills-juego2" type="button" role="tab" aria-controls="pills-juego2" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn3.png')}}" id="pills-juego3-tab" data-bs-toggle="pill" data-bs-target="#pills-juego3" type="button" role="tab" aria-controls="pills-juego3" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn4.png')}}" alt="" id="pills-juego4-tab" data-bs-toggle="pill" data-bs-target="#pills-juego4" type="button" role="tab" aria-controls="pills-juego4" aria-selected="true">
            </li>
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn5.png')}}" id="pills-juego5-tab" data-bs-toggle="pill" data-bs-target="#pills-juego5" type="button" role="tab" aria-controls="pills-juego5" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn6.png')}}" id="pills-juego6-tab" data-bs-toggle="pill" data-bs-target="#pills-juego6" type="button" role="tab" aria-controls="pills-juego6" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn7.png')}}" id="pills-juego7-tab" data-bs-toggle="pill" data-bs-target="#pills-juego7" type="button" role="tab" aria-controls="pills-juego7" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="{{asset('img/btn8.png')}}" id="pills-juego8-tab" data-bs-toggle="pill" data-bs-target="#pills-juego8" type="button" role="tab" aria-controls="pills-juego8" aria-selected="false">
            </li>


          </ul>
        </div>

        <div class="resultados">
            <a href="{{url('apuestas/create')}}" class="btn btn-success float-left">Apostar</a>

          <div class="tab-content" id="pills-tabContent">
            <!-- Juego1 -->
            <div class="tab-pane fade show active" id="pills-juego1" role="tabpanel" aria-labelledby="pills-juego1-tab" tabindex="0">
              <div class="container-fit">
                @foreach ($apuestas as $apuesta)
                    <div class="carta">
                    <div class="nombre">{{ $apuesta->name }}</div>
                    <div class="carta-apuesta">
                        <div class="carta-resultado">
                        <div class="title">Resultado</div>
                        <div class="marcador">
                            <div>{{ $apuesta->resultados->resultado1 }}</div>
                            <div>{{ $apuesta->resultados->resultado2 }}</div>
                        </div>
                        <div class="imagenes-equipos">
                            <div><img src="{{asset('img/ecuador.png')}}" alt=""></div>
                            <div>vs</div>
                            <div><img src="{{asset('img/senegal.png')}}" alt=""></div>
                        </div>
                        <div class="marcador">
                            <div>{{ $apuesta->apuesta1 }}</div>
                            <div>{{ $apuesta->apuesta2 }}</div>
                        </div>
                        <div class="title">Apuesta</div>
                        <div class="total">{{ $apuesta->totalj1 }}</div>
                        <div class="pts-g">{{ $apuesta->ptsg }}</div>
                        <div class="pts-i1">{{ $apuesta->ptsi1 }}</div>
                        <div class="pts-i2">{{ $apuesta->ptsi2 }}</div>
                        <div class="pts-ab">{{ $apuesta->ptsab }}</div>
                        </div>
                    </div>
                    </div>
                @endforeach


              </div>
            </div>
            <!-- Juego2 -->
            <div class="tab-pane fade" id="pills-juego2" role="tabpanel" aria-labelledby="pills-juego2-tab" tabindex="0">
                <div class="container-fit">
                    @foreach ($apuestas as $apuesta)
                        <div class="carta">
                        <div class="nombre">{{ $apuesta->name }}</div>
                        <div class="carta-apuesta">
                            <div class="carta-resultado">
                            <div class="title">Resultado</div>
                            <div class="marcador">
                                <div>{{ $apuesta->resultados->resultado3 }}</div>
                                <div>{{ $apuesta->resultados->resultado4 }}</div>
                            </div>
                            <div class="imagenes-equipos">
                                <div><img src="{{asset('img/paises.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/catar.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta3 }}</div>
                                <div>{{ $apuesta->apuesta4 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->totalj2}}</div>
                            <div class="pts-g">{{ $apuesta->ptsg2 }}</div>
                            <div class="pts-i1">{{ $apuesta->ptsi3 }}</div>
                            <div class="pts-i2">{{ $apuesta->ptsi4 }}</div>
                            <div class="pts-ab">{{ $apuesta->ptsab2 }}</div>
                            </div>
                        </div>
                        </div>
                    @endforeach


                  </div>
            </div>
            <!-- Juego3 -->
            <div class="tab-pane fade" id="pills-juego3" role="tabpanel" aria-labelledby="pills-juego3-tab" tabindex="0">
                <div class="container-fit">
                    @foreach ($apuestas as $apuesta)
                        <div class="carta">
                        <div class="nombre">{{ $apuesta->name }}</div>
                        <div class="carta-apuesta">
                            <div class="carta-resultado">
                            <div class="title">Resultado</div>
                            <div class="marcador">
                                <div>{{ $apuesta->resultados->resultado5 }}</div>
                                <div>{{ $apuesta->resultados->resultado6 }}</div>
                            </div>
                            <div class="imagenes-equipos">
                                <div><img src="{{asset('img/iran.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/eeuu.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta5 }}</div>
                                <div>{{ $apuesta->apuesta6 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->totalj3 }}</div>
                            <div class="pts-g">{{ $apuesta->ptsg3 }}</div>
                            <div class="pts-i1">{{ $apuesta->ptsi5 }}</div>
                            <div class="pts-i2">{{ $apuesta->ptsi6 }}</div>
                            <div class="pts-ab">{{ $apuesta->ptsab3 }}</div>
                            </div>
                        </div>
                        </div>
                    @endforeach


                  </div>
            </div>
            <!-- Juego4 -->
            <div class="tab-pane fade" id="pills-juego4" role="tabpanel" aria-labelledby="pills-juego4-tab" tabindex="0">
                <div class="container-fit">
                    @foreach ($apuestas as $apuesta)
                        <div class="carta">
                        <div class="nombre">{{ $apuesta->name }}</div>
                        <div class="carta-apuesta">
                            <div class="carta-resultado">
                            <div class="title">Resultado</div>
                            <div class="marcador">
                                <div>{{ $apuesta->resultados->resultado7 }}</div>
                                <div>{{ $apuesta->resultados->resultado8 }}</div>
                            </div>
                            <div class="imagenes-equipos">
                                <div><img src="{{asset('img/gales.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/inglaterra.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta7 }}</div>
                                <div>{{ $apuesta->apuesta8 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->totalj4 }}</div>
                            <div class="pts-g">{{ $apuesta->ptsg4 }}</div>
                            <div class="pts-i1">{{ $apuesta->ptsi7 }}</div>
                            <div class="pts-i2">{{ $apuesta->ptsi8 }}</div>
                            <div class="pts-ab">{{ $apuesta->ptsab4 }}</div>
                            </div>
                        </div>
                        </div>
                    @endforeach


                  </div>
            </div>
            <!-- Juego5 -->
            <div class="tab-pane fade" id="pills-juego5" role="tabpanel" aria-labelledby="pills-juego5-tab" tabindex="0">
                <div class="container-fit">
                    @foreach ($apuestas as $apuesta)
                        <div class="carta">
                        <div class="nombre">{{ $apuesta->name }}</div>
                        <div class="carta-apuesta">
                            <div class="carta-resultado">
                            <div class="title">Resultado</div>
                            <div class="marcador">
                                <div>{{ $apuesta->resultados->resultado9 }}</div>
                                <div>{{ $apuesta->resultados->resultado10 }}</div>
                            </div>
                            <div class="imagenes-equipos">
                                <div><img src="{{asset('img/tunez.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/francia.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta9 }}</div>
                                <div>{{ $apuesta->apuesta10 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->totalj5 }}</div>
                            <div class="pts-g">{{ $apuesta->ptsg5 }}</div>
                            <div class="pts-i1">{{ $apuesta->ptsi9 }}</div>
                            <div class="pts-i2">{{ $apuesta->ptsi10 }}</div>
                            <div class="pts-ab">{{ $apuesta->ptsab5 }}</div>
                            </div>
                        </div>
                        </div>
                    @endforeach


                  </div>
            </div>
            <!-- Juego6 -->
            <div class="tab-pane fade" id="pills-juego6" role="tabpanel" aria-labelledby="pills-juego6-tab" tabindex="0">
                <div class="container-fit">
                    @foreach ($apuestas as $apuesta)
                        <div class="carta">
                        <div class="nombre">{{ $apuesta->name }}</div>
                        <div class="carta-apuesta">
                            <div class="carta-resultado">
                            <div class="title">Resultado</div>
                            <div class="marcador">
                                <div>{{ $apuesta->resultados->resultado11 }}</div>
                                <div>{{ $apuesta->resultados->resultado12 }}</div>
                            </div>
                            <div class="imagenes-equipos">
                                <div><img src="{{asset('img/australia.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/dinamarca.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta11 }}</div>
                                <div>{{ $apuesta->apuesta12 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->totalj6 }}</div>
                            <div class="pts-g">{{ $apuesta->ptsg6 }}</div>
                            <div class="pts-i1">{{ $apuesta->ptsi11 }}</div>
                            <div class="pts-i2">{{ $apuesta->ptsi12 }}</div>
                            <div class="pts-ab">{{ $apuesta->ptsab6 }}</div>
                            </div>
                        </div>
                        </div>
                    @endforeach


                  </div>
            </div>
            <!-- Juego7 -->
            <div class="tab-pane fade" id="pills-juego7" role="tabpanel" aria-labelledby="pills-juego7-tab" tabindex="0">
                <div class="container-fit">
                    @foreach ($apuestas as $apuesta)
                        <div class="carta">
                        <div class="nombre">{{ $apuesta->name }}</div>
                        <div class="carta-apuesta">
                            <div class="carta-resultado">
                            <div class="title">Resultado</div>
                            <div class="marcador">
                                <div>{{ $apuesta->resultados->resultado13 }}</div>
                                <div>{{ $apuesta->resultados->resultado14 }}</div>
                            </div>
                            <div class="imagenes-equipos">
                                <div><img src="{{asset('img/polonia.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/argentina.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta13 }}</div>
                                <div>{{ $apuesta->apuesta14 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->totalj7 }}</div>
                            <div class="pts-g">{{ $apuesta->ptsg7 }}</div>
                            <div class="pts-i1">{{ $apuesta->ptsi13 }}</div>
                            <div class="pts-i2">{{ $apuesta->ptsi14 }}</div>
                            <div class="pts-ab">{{ $apuesta->ptsab7 }}</div>
                            </div>
                        </div>
                        </div>
                    @endforeach


                  </div>
            </div>
            <!-- Juego8 -->
            <div class="tab-pane fade" id="pills-juego8" role="tabpanel" aria-labelledby="pills-juego8-tab" tabindex="0">
                <div class="container-fit">
                    @foreach ($apuestas as $apuesta)
                        <div class="carta">
                        <div class="nombre">{{ $apuesta->name }}</div>
                        <div class="carta-apuesta">
                            <div class="carta-resultado">
                            <div class="title">Resultado</div>
                            <div class="marcador">
                                <div>{{ $apuesta->resultados->resultado15 }}</div>
                                <div>{{ $apuesta->resultados->resultado16 }}</div>
                            </div>
                            <div class="imagenes-equipos">
                                <div><img src="{{asset('img/arabia.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/mexico.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta15 }}</div>
                                <div>{{ $apuesta->apuesta16 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->totalj8 }}</div>
                            <div class="pts-g">{{ $apuesta->ptsg8 }}</div>
                            <div class="pts-i1">{{ $apuesta->ptsi15 }}</div>
                            <div class="pts-i2">{{ $apuesta->ptsi16 }}</div>
                            <div class="pts-ab">{{ $apuesta->ptsab8 }}</div>
                            </div>
                        </div>
                        </div>
                    @endforeach


                  </div>
            </div>

          </div>






        </div>
      </div>
    </div>
    <!-- apuestas -->
    <div class="tab-pane fade show" id="nav-apuesta" role="tabpanel" aria-labelledby="nav-apuesta-tab">
        <table class="table table-dark table-hover text-center">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col"><img src="{{asset('img/ecuador.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/senegal.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/paises.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/catar.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/iran.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/eeuu.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/gales.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/inglaterra.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/tunez.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/francia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/australia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/dinamarca.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/polonia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/argentina.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/arabia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/mexico.png')}}" width="30px" alt=""></th>

              </tr>
            </thead>
            <tbody>
                @foreach ($apuestas as $apuesta)
                    <tr>
                        <td>{{ $apuesta->name }}</td>
                        <td>{{ $apuesta->apuesta1 }}</td>
                        <td>{{ $apuesta->apuesta2 }}</td>
                        <td>{{ $apuesta->apuesta3 }}</td>
                        <td>{{ $apuesta->apuesta4 }}</td>
                        <td>{{ $apuesta->apuesta5 }}</td>
                        <td>{{ $apuesta->apuesta6 }}</td>
                        <td>{{ $apuesta->apuesta7 }}</td>
                        <td>{{ $apuesta->apuesta8 }}</td>
                        <td>{{ $apuesta->apuesta9 }}</td>
                        <td>{{ $apuesta->apuesta10 }}</td>
                        <td>{{ $apuesta->apuesta11 }}</td>
                        <td>{{ $apuesta->apuesta12 }}</td>
                        <td>{{ $apuesta->apuesta13 }}</td>
                        <td>{{ $apuesta->apuesta14 }}</td>
                        <td>{{ $apuesta->apuesta15 }}</td>
                        <td>{{ $apuesta->apuesta16 }}</td>

                    </tr>

                @endforeach



            </tbody>
        </table>
    </div>
    <!-- Resultados -->
    <div class="tab-pane fade show" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
        <table class="table table-dark table-hover text-center">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col"><img src="{{asset('img/ecuador.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/senegal.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/paises.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/catar.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/iran.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/eeuu.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/gales.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/inglaterra.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/tunez.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/francia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/australia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/dinamarca.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/polonia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/argentina.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/arabia.png')}}" width="30px" alt=""></th>
                <th scope="col"><img src="{{asset('img/mexico.png')}}" width="30px" alt=""></th>

              </tr>
            </thead>
            <tbody>
                @foreach ($apuestas as $apuesta)
                    <tr>
                        <td>{{ $apuesta->name }}</td>
                        <td>{{ $apuesta->resultados->resultado1 }}</td>
                        <td>{{ $apuesta->resultados->resultado2 }}</td>
                        <td>{{ $apuesta->resultados->resultado3 }}</td>
                        <td>{{ $apuesta->resultados->resultado4 }}</td>
                        <td>{{ $apuesta->resultados->resultado5 }}</td>
                        <td>{{ $apuesta->resultados->resultado6 }}</td>
                        <td>{{ $apuesta->resultados->resultado7 }}</td>
                        <td>{{ $apuesta->resultados->resultado8 }}</td>
                        <td>{{ $apuesta->resultados->resultado9 }}</td>
                        <td>{{ $apuesta->resultados->resultado10 }}</td>
                        <td>{{ $apuesta->resultados->resultado11 }}</td>
                        <td>{{ $apuesta->resultados->resultado12 }}</td>
                        <td>{{ $apuesta->resultados->resultado13 }}</td>
                        <td>{{ $apuesta->resultados->resultado14 }}</td>
                        <td>{{ $apuesta->resultados->resultado15 }}</td>
                        <td>{{ $apuesta->resultados->resultado16 }}</td>

                    </tr>

                @endforeach



            </tbody>
        </table>
    </div>
    <!-- posiciones -->
    <div class="tab-pane fade show" id="nav-posicion" role="tabpanel" aria-labelledby="nav-posicion-tab">
        <div class="posiciones">
            <div class="img-podio">
              <img src="{{asset('img/podio.png')}}" alt="">
                @if (isset($apuesta->name))
                <h4>{{ $apuestas2->name }}</h4>
                @endif

            </div>

            <table class="table table-dark table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Total</th>


                </tr>
                </thead>
                <tbody>
                    @foreach ($apuestas as $apuesta)
                        <tr>
                            <td>{{ $apuesta->name }}</td>
                            <td>{{ $apuesta->total }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

  </div>
@endsection

