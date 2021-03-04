@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Pabellon</div>
                    <div class="card-body">
                        <a href="{{ url('/pabellon/create') }}" class="btn btn-success btn-sm" title="Add New Pabellon">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                          <a href="listaPabellon" class="btn btn-success btn-sm" title="Add New Empleado">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
                            </a>

                            <a href="Pabellon/export" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel
                             </a>

                        <form method="GET" action="{{ url('/pabellon') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><!--<th>IdPabellon</th>--><th>Nombre</th><th>Ubicacion</th><th>Estatus</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pabellon as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->idPabellon }}</td>
                                        <!--<td>{{ $item->idPabellon }}</td>--><td>{{ $item->nombre }}</td><td>{{ $item->ubicacion }}</td><td>{{ $item->Estatus->estatus }}</td>
                                        <td>
                                            <a href="{{ url('/pabellon/' . $item->idPabellon) }}" title="View Pabellon"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/pabellon/' . $item->idPabellon . '/edit') }}" title="Edit Pabellon"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/pabellon' . '/' . $item->idPabellon) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Pabellon" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pabellon->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
