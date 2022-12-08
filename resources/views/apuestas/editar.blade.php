

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('apuestas.create') }}"> Create New Product</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>apuesta1</th>
            <th>apuesta2</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($apuestas as $apuesta)

        <tr>



            <td>{{ $apuesta->name }}</td>

            <td>{{ $apuesta->apuesta1 }}</td>
            <td>{{ $apuesta->apuesta2 }}</td>

            <td>

                <form action="{{ route('apuestas.destroy',$apuesta->id) }}" method="POST">







                    <a class="btn btn-primary" href="{{ route('apuestas.edit',$apuesta->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>







