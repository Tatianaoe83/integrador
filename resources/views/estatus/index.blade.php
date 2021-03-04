@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Estatus</div>
                    <div class="card-body">
                        <a href="{{ url('/estatus/create') }}" class="btn btn-success btn-sm" title="Add New Estatus">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                          <a href="listaEstatus" class="btn btn-success btn-sm" title="Add New Estatus">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
                            </a>
                            <a href="Estatus/export" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel
                             </a>

                        <form method="GET" action="{{ url('/estatus') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><!--<th>IdEstatus</th>--><th>Estatus</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($estatus as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->idEstatus }}</td>
                                        <!--<td>{{ $item->idEstatus }}</td>--><td>{{ $item->estatus }}</td>
                                        <td>
                                            <a href="{{ url('/estatus/' . $item->idEstatus) }}" title="View Estatus"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/estatus/' . $item->idEstatus . '/edit') }}" title="Edit Estatus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/estatus' . '/' . $item->idEstatus) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Estatus" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $estatus->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
