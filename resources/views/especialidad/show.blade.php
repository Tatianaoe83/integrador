@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Especialidad {{ $especialidad->idEspecialidad }}</div>
                    <div class="card-body">

                        <a href="{{ url('/especialidad') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/especialidad/' . $especialidad->idEspecialidad . '/edit') }}" title="Edit Especialidad"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('especialidad' . '/' . $especialidad->idEspecialidad) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Especialidad" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $especialidad->idEspecialidad }}</td>
                                    </tr>
                                    <tr><th> IdEspecialidad </th><td> {{ $especialidad->idEspecialidad }} </td></tr><tr><th> Especialidad </th><td> {{ $especialidad->Especialidad }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
