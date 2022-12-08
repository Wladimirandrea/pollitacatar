@extends('layouts.master')

@section('adminapuesta')

<table class="table table-bordered">
    <tr>
    <th>S.No</th>
    <th>Company Name</th>
    <th>Company Email</th>
    <th>Company Address</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($apuestas as $apuesta)
    <tr>
    <td>{{ $apuesta->id }}</td>
    <td>{{ $apuesta->name }}</td>

    <td>
        <a class="btn btn-primary" href="{{ route('apuestas.edit',$apuesta->id) }}">Edit</a>
    {{-- <form action="{{ route('admin.destroy',$apuesta->id) }}" method="Post">

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form> --}}
    </td>
    </tr>
    @endforeach
    </table>

@endsection
