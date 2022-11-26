@extends('layouts.master')

@section('content')
<div class="tab-content" id="nav-tabContent">
    <!-- PRINCIPAL -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="apuesta-resultado">
        <div class="botones-juegos">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <img src="img/btn1.png" alt="" id="pills-juego1-tab" data-bs-toggle="pill" data-bs-target="#pills-juego1" type="button" role="tab" aria-controls="pills-juego1" aria-selected="true">
            </li>
            <li class="nav-item" role="presentation">
              <img src="img/btn2.png" id="pills-juego2-tab" data-bs-toggle="pill" data-bs-target="#pills-juego2" type="button" role="tab" aria-controls="pills-juego2" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="img/btn3.png" id="pills-juego3-tab" data-bs-toggle="pill" data-bs-target="#pills-juego3" type="button" role="tab" aria-controls="pills-juego3" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="img/btn4.png" alt="" id="pills-juego4-tab" data-bs-toggle="pill" data-bs-target="#pills-juego4" type="button" role="tab" aria-controls="pills-juego4" aria-selected="true">
            </li>
            <li class="nav-item" role="presentation">
              <img src="img/btn5.png" id="pills-juego5-tab" data-bs-toggle="pill" data-bs-target="#pills-juego5" type="button" role="tab" aria-controls="pills-juego5" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="img/btn6.png" id="pills-juego6-tab" data-bs-toggle="pill" data-bs-target="#pills-juego6" type="button" role="tab" aria-controls="pills-juego6" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="img/btn7.png" id="pills-juego7-tab" data-bs-toggle="pill" data-bs-target="#pills-juego7" type="button" role="tab" aria-controls="pills-juego7" aria-selected="false">
            </li>
            <li class="nav-item" role="presentation">
              <img src="img/btn8.png" id="pills-juego8-tab" data-bs-toggle="pill" data-bs-target="#pills-juego8" type="button" role="tab" aria-controls="pills-juego8" aria-selected="false">
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
                            <div><img src="{{asset('img/japon.png')}}" alt=""></div>
                            <div>vs</div>
                            <div><img src="{{asset('img/costarica.png')}}" alt=""></div>
                        </div>
                        <div class="marcador">
                            <div>{{ $apuesta->apuesta1 }}</div>
                            <div>{{ $apuesta->apuesta2 }}</div>
                        </div>
                        <div class="title">Apuesta</div>
                        <div class="total">{{ $apuesta->total }}</div>
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
                                <div><img src="{{asset('img/belgica.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/marruecos.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta3 }}</div>
                                <div>{{ $apuesta->apuesta4 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->total }}</div>
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
                                <div><img src="{{asset('img/croacia.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/canada.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta5 }}</div>
                                <div>{{ $apuesta->apuesta6 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->total }}</div>
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
                                <div><img src="{{asset('img/españa.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/alemania.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta7 }}</div>
                                <div>{{ $apuesta->apuesta8 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->total }}</div>
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
                                <div><img src="{{asset('img/camerun.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/serbia.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta9 }}</div>
                                <div>{{ $apuesta->apuesta10 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->total }}</div>
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
                                <div><img src="{{asset('img/corea.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/ghana.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta11 }}</div>
                                <div>{{ $apuesta->apuesta12 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->total }}</div>
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
                                <div><img src="{{asset('img/brazil.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/suiza.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta13 }}</div>
                                <div>{{ $apuesta->apuesta14 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->total }}</div>
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
                                <div><img src="{{asset('img/portugal.png')}}" alt=""></div>
                                <div>vs</div>
                                <div><img src="{{asset('img/uruguay.png')}}" alt=""></div>
                            </div>
                            <div class="marcador">
                                <div>{{ $apuesta->apuesta15 }}</div>
                                <div>{{ $apuesta->apuesta16 }}</div>
                            </div>
                            <div class="title">Apuesta</div>
                            <div class="total">{{ $apuesta->total }}</div>
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
    <!-- CREAR APUESTAS -->
    <div class="tab-pane fade table-posicion" id="nav-apuesta" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="pos">
            <table class="table table-dark table-hover text-center">
                <thead>
                  <tr>
                    <th>#</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                  </tr>
                  <tr>
                    <th>2</th>
                  </tr>
                  <tr>
                    <th>3</th>
                  </tr>
                  <tr>
                    <th>4</th>
                  </tr>
                  <tr>
                    <th>5</th>
                  </tr>
                  <tr>
                    <th>6</th>
                  </tr>
                  <tr>
                    <th>7</th>
                  </tr>
                  <tr>
                    <th>8</th>
                  </tr>
                  <tr>
                    <th>9</th>
                  </tr>
                  <tr>
                    <th>10</th>
                  </tr>
                  <tr>
                    <th>11</th>
                  </tr>
                  <tr>
                    <th>12</th>
                  </tr>
                  <tr>
                    <th>13</th>
                  </tr>
                  <tr>
                    <th>14</th>
                  </tr>
                  <tr>
                    <th>15</th>
                  </tr>
                  <tr>
                    <th>16</th>
                  </tr>
                  <tr>
                    <th>17</th>
                  </tr>
                  <tr>
                    <th>18</th>
                  </tr>
                  <tr>
                    <th>19</th>
                  </tr>
                  <tr>
                    <th>20</th>
                  </tr>
                  <tr>
                    <th>21</th>
                  </tr>
                  <tr>
                    <th>22</th>
                  </tr>
                  <tr>
                    <th>23</th>
                  </tr>
                  <tr>
                    <th>24</th>
                  </tr>
                </tbody>
            </table>
        </div>
        <div class="tabla">
            <table class="table text-center table-dark table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>

                    <th>Puntos</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- POSICIONES -->
    <div class="tab-pane fade table-posicion" id="nav-posicion" role="tabpanel" aria-labelledby="nav-posicion-tab">
        <div class="pos">
            <table class="table table-dark table-hover text-center">
                <thead>
                  <tr>
                    <th>#</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                  </tr>
                  <tr>
                    <th>2</th>
                  </tr>
                  <tr>
                    <th>3</th>
                  </tr>
                  <tr>
                    <th>4</th>
                  </tr>
                  <tr>
                    <th>5</th>
                  </tr>
                  <tr>
                    <th>6</th>
                  </tr>
                  <tr>
                    <th>7</th>
                  </tr>
                  <tr>
                    <th>8</th>
                  </tr>
                  <tr>
                    <th>9</th>
                  </tr>
                  <tr>
                    <th>10</th>
                  </tr>
                  <tr>
                    <th>11</th>
                  </tr>
                  <tr>
                    <th>12</th>
                  </tr>
                  <tr>
                    <th>13</th>
                  </tr>
                  <tr>
                    <th>14</th>
                  </tr>
                  <tr>
                    <th>15</th>
                  </tr>
                  <tr>
                    <th>16</th>
                  </tr>
                  <tr>
                    <th>17</th>
                  </tr>
                  <tr>
                    <th>18</th>
                  </tr>
                  <tr>
                    <th>19</th>
                  </tr>
                  <tr>
                    <th>20</th>
                  </tr>
                  <tr>
                    <th>21</th>
                  </tr>
                  <tr>
                    <th>22</th>
                  </tr>
                  <tr>
                    <th>23</th>
                  </tr>
                  <tr>
                    <th>24</th>
                  </tr>
                </tbody>
            </table>
        </div>
        <div class="tabla">
            <table class="table text-center table-dark table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>

                    <th>Puntos</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>pedro</td>
                    <td>20</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- cerrar sesion -->
    <div class="tab-pane fade" id="nav-sesion" role="tabpanel" aria-labelledby="nav-sesion-tab">cerrar sesion</div>
  </div>
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="pull-right">

                    <a class="btn btn-success" href="{{ route('apuestas.create') }}">Nueva Apuesta</a>

                </div>
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


            </div>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/200px-Flag_of_Morocco.svg.png" width="50px" alt=""></th>
                    <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/1280px-Flag_of_Croatia.svg.png" width="50px" alt=""></th>
                    <th>res1</th>
                    <th>res2</th>
                    <th>ptsg</th>
                    <th>ptsi1</th>
                    <th>ptsi2</th>
                    <th>ptsab</th>

                    <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/640px-Flag_of_Germany.svg.png" width="50px" alt=""></th>
                    <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/200px-Flag_of_Japan.svg.png" width="50px" alt=""></th>
                    <th>res3</th>
                    <th>res4</th>
                    <th>ptsg</th>
                    <th>ptsi1</th>
                    <th>ptsi2</th>
                    <th>ptsab</th>

                    <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Bandera_de_Espa%C3%B1a.svg/1200px-Bandera_de_Espa%C3%B1a.svg.png" width="50px" alt=""></th>
                    <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Costa_Rica.svg/2560px-Flag_of_Costa_Rica.svg.png" width="50px" alt=""></th>
                    <th>res5</th>
                    <th>res6</th>
                    <th>ptsg</th>
                    <th>ptsi1</th>
                    <th>ptsi2</th>
                    <th>ptsab</th>

                    <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_Belgium_%28civil%29.svg/1200px-Flag_of_Belgium_%28civil%29.svg.png" width="50px" alt=""></th>
                    <th><img src="https://static.vecteezy.com/system/resources/previews/001/218/820/non_2x/illustration-of-canada-flag-vector.jpg" width="50px" alt=""></th>
                    <th>res7</th>
                    <th>res8</th>
                    <th>ptsg</th>
                    <th>ptsi1</th>
                    <th>ptsi2</th>
                    <th>ptsab</th>

                    <th>total</th>
                </tr>

                @foreach ($apuestas as $apuesta)

                <tr>

                    <td>{{ $apuesta->name }}</td>
                    <td>{{ $apuesta->apuesta1 }}</td>
                    <td>{{ $apuesta->apuesta2 }}</td>
                    <td>{{ $apuesta->resultados->resultado1 }}</td>
                    <td>{{ $apuesta->resultados->resultado2 }}</td>
                    <td>{{ $apuesta->ptsg }}</td>
                    <td>{{ $apuesta->ptsi1 }}</td>
                    <td>{{ $apuesta->ptsi2 }}</td>
                    <td>{{ $apuesta->ptsab }}</td>

                    <td>{{ $apuesta->apuesta3 }}</td>
                    <td>{{ $apuesta->apuesta4 }}</td>
                    <td>{{ $apuesta->resultados->resultado3 }}</td>
                    <td>{{ $apuesta->resultados->resultado4 }}</td>
                    <td>{{ $apuesta->ptsg2 }}</td>
                    <td>{{ $apuesta->ptsi3 }}</td>
                    <td>{{ $apuesta->ptsi4 }}</td>
                    <td>{{ $apuesta->ptsab2 }}</td>

                    <td>{{ $apuesta->apuesta5 }}</td>
                    <td>{{ $apuesta->apuesta6 }}</td>
                    <td>{{ $apuesta->resultados->resultado5 }}</td>
                    <td>{{ $apuesta->resultados->resultado6 }}</td>
                    <td>{{ $apuesta->ptsg3 }}</td>
                    <td>{{ $apuesta->ptsi5 }}</td>
                    <td>{{ $apuesta->ptsi6 }}</td>
                    <td>{{ $apuesta->ptsab3 }}</td>

                    <td>{{ $apuesta->apuesta7 }}</td>
                    <td>{{ $apuesta->apuesta8 }}</td>
                    <td>{{ $apuesta->resultados->resultado7 }}</td>
                    <td>{{ $apuesta->resultados->resultado8 }}</td>
                    <td>{{ $apuesta->ptsg4 }}</td>
                    <td>{{ $apuesta->ptsi7 }}</td>
                    <td>{{ $apuesta->ptsi8 }}</td>
                    <td>{{ $apuesta->ptsab4 }}</td>

                    <td>{{ $apuesta->total }}</td>

                    </td>

                </tr>

                @endforeach

            </table>

        </div>
    </div>
</div>
 --}}
