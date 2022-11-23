<div class="container">
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
