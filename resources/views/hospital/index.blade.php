@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Hospital</div>
                    <div class="card-body">
                        <a href="{{ url('/hospital/create') }}" class="btn btn-success btn-sm" title="Add New hospital">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>
                          <a href="listaHospital" class="btn btn-success btn-sm" title="Add New Empleado">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
    </a>

    <a href="Hospital/export" class="btn btn-success btn-sm" title="Add New Area">
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel
                             </a>

                        <form method="GET" action="{{ url('/hospital') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><!--<th>IdHospital</th>--><th>Director General</th><th>Nombre</th><th>Direccion</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hospital as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->idHospital }}</td>
                                        <!--<td>{{ $item->idHospital }}</td>--><td>{{ $item->directorGeneral }}</td><td>{{ $item->nombre }}</td><td>{{ $item->direccion }}</td>
                                        <td>
                                            <a href="{{ url('/hospital/' . $item->idHospital) }}" title="View hospital"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/hospital/' . $item->idHospital . '/edit') }}" title="Edit hospital"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/hospital' . '/' . $item->idHospital) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete hospital" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $hospital->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <center><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14978.398444637502!2d-89.28872178022459!3d20.192389750000007!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1533042601912" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>

@endsection
