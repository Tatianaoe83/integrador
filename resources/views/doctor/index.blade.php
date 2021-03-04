@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Doctor</div>
                    <div class="card-body">
                        <a href="{{ url('/doctor/create') }}" class="btn btn-success btn-sm" title="Add New Doctor">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                         <a href="listaDoctor" class="btn btn-success btn-sm" title="Add New Doctor">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
                        </a>

                         <a href="Doctor/export" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel
                             </a>

                        <form method="GET" action="{{ url('/doctor') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><!--<th>IdDoctor</th>--><th>Nombre</th><th>Especialidad</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($doctor as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->idDoctor }}</td>
                                        <!--<td>{{ $item->idDoctor }}</td>--><td>{{ $item->nombre }}</td><td>{{ $item->Especialidad->Especialidad }}</td>
                                        <td>
                                            <a href="{{ url('/doctor/' . $item->idDoctor) }}" title="View Doctor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/doctor/' . $item->idDoctor . '/edit') }}" title="Edit Doctor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/doctor' . '/' . $item->idDoctor) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Doctor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $doctor->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
