<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('resultados.create') }}"> Create New Product</a>

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

        <th>resultado1</th>

        <th>resultado2</th>


        <th width="280px">Action</th>

    </tr>

    @foreach ($resultados as $resultado)

    <tr>



        <td>{{ $resultado->resultado1 }}</td>

        <td>{{ $resultado->resultado2 }}</td>

        <td>

            <form action="{{ route('resultados.destroy',$resultado->id) }}" method="POST">



                <a class="btn btn-info" href="{{ route('resultados.show',$resultado->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('resultados.edit',$resultado->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>



{{-- {!! $resultado->links() !!} --}}
