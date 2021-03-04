@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Piso</div>
                    <div class="card-body">
                        <a href="{{ url('/piso/create') }}" class="btn btn-success btn-sm" title="Add New Piso">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>
                         <a href="listaPiso" class="btn btn-success btn-sm" title="Add New Piso">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
                         </a>

                         <a href="Piso/export" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel
                             </a>

                        <form method="GET" action="{{ url('/piso') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><!--<th>IdPiso</th>--><th>Nombre</th><th>Hospital</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($piso as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->idPiso }}</td>
                                        <!--<td>{{ $item->idPiso }}</td>--><td>{{ $item->nombre }}</td><td>{{ $item->hospital->nombre}}</td>
                                        <td>
                                            <a href="{{ url('/piso/' . $item->idPiso) }}" title="View Piso"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/piso/' . $item->idPiso . '/edit') }}" title="Edit Piso"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/piso' . '/' . $item->idPiso) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Piso" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $piso->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
