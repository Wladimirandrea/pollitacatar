@extends('layouts.master')
@section('apuestas')
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
@endsection





{{-- {!! $resultado->links() !!} --}}
