<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="pull-right">

                    <a class="btn btn-success" href="{{ route('apuestas.create') }}"> Create New Product</a>

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
                    <th>Ap1</th>
                    <th>Ap2</th>
                    <th>res1</th>
                    <th>res2</th>

                    <th>Ap3</th>
                    <th>Ap4</th>
                    <th>res3</th>
                    <th>res4</th>

                    <th>Ap5</th>
                    <th>Ap6</th>
                    <th>res5</th>
                    <th>res6</th>

                    <th>Ap7</th>
                    <th>Ap8</th>
                    <th>res7</th>
                    <th>res8</th>
                    <th>total</th>
                </tr>

                @foreach ($apuestas as $apuesta)

                <tr>

                    <td>{{ $apuesta->name }}</td>
                    <td>{{ $apuesta->apuesta1 }}</td>
                    <td>{{ $apuesta->apuesta2 }}</td>
                    <td>{{ $apuesta->resultados->resultado1 }}</td>
                    <td>{{ $apuesta->resultados->resultado2 }}</td>

                    <td>{{ $apuesta->apuesta3 }}</td>
                    <td>{{ $apuesta->apuesta4 }}</td>
                    <td>{{ $apuesta->resultados->resultado3 }}</td>
                    <td>{{ $apuesta->resultados->resultado4 }}</td>

                    <td>{{ $apuesta->apuesta5 }}</td>
                    <td>{{ $apuesta->apuesta6 }}</td>
                    <td>{{ $apuesta->resultados->resultado5 }}</td>
                    <td>{{ $apuesta->resultados->resultado6 }}</td>

                    <td>{{ $apuesta->apuesta7 }}</td>
                    <td>{{ $apuesta->apuesta8 }}</td>
                    <td>{{ $apuesta->resultados->resultado7 }}</td>
                    <td>{{ $apuesta->resultados->resultado8 }}</td>
                    <td>{{ $apuesta->total }}</td>

                    </td>

                </tr>

                @endforeach

            </table>
        </div>
    </div>
</div>
