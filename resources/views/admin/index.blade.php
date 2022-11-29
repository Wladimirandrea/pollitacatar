@extends('layouts.master')

@section('adminapuesta')


    <div class="row">

        <div class="col-lg-12 margin-tb">



            <div class="pull-right">



            </div>

        </div>

    </div>







    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($apuestas as $apuesta)

        <tr>



            <td>{{ $apuesta->name }}</td>



            <td>

                <td>
                    <form action="{{ route('apuesta.destroy',$apuesta->id) }}" method="Post">
                        {{-- <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a> --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </td>

        </tr>

        @endforeach

    </table>



@endsection
