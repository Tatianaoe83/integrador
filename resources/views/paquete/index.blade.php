@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Paquete</div>
                    <div class="card-body">
                        <a href="{{ url('/paquete/create') }}" class="btn btn-success btn-sm" title="Add New Paquete">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                 <a href="paqueteshow" class="btn btn-success btn-sm" title="Add New Paquete">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ver paquetes registrados
                        </a>

                        <form method="GET" action="{{ url('/paquete') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>IdPaquete</th><th>Nombre</th><th>Costo</th><th>Descripcion</th><th>Tiempo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paquete as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->idPaquete }}</td>
                                        <td>{{ $item->idPaquete }}</td><td>{{ $item->nombre }}</td><td>{{ $item->costo }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->tiempo }}</td>
                                        <td>
                                            <a href="{{ url('/paquete/' . $item->idPaquete) }}" title="View Paquete"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/paquete/' . $item->idPaquete . '/edit') }}" title="Edit Paquete"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/paquete' . '/' . $item->idPaquete) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Paquete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $paquete->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
