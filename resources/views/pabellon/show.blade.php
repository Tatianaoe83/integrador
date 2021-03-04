@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Pabellon {{ $pabellon->idPabellon }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pabellon') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pabellon/' . $pabellon->idPabellon . '/edit') }}" title="Edit Pabellon"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('pabellon' . '/' . $pabellon->idPabellon) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Pabellon" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pabellon->idPabellon }}</td>
                                    </tr>
                                    <tr><th> IdPabellon </th><td> {{ $pabellon->idPabellon }} </td></tr><tr><th> Nombre </th><td> {{ $pabellon->nombre }} </td></tr><tr><th> Ubicacion </th><td> {{ $pabellon->ubicacion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
