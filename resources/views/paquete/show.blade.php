@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Paquete {{ $paquete->idPaquete }}</div>
                    <div class="card-body">

                        <a href="{{ url('/paquete') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/paquete/' . $paquete->idPaquete . '/edit') }}" title="Edit Paquete"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('paquete' . '/' . $paquete->idPaquete) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Paquete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>



                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $paquete->idPaquete }}</td>
                                    </tr>
                                    <tr><th> IdPaquete </th><td> {{ $paquete->idPaquete }} </td></tr><tr><th> Nombre </th><td> {{ $paquete->nombre }} </td></tr><tr><th> Costo </th><td> {{ $paquete->costo }} </td></tr><tr><th> Descripcion </th><td> {{ $paquete->descripcion }} </td></tr><tr><th> Clientes </th><td>   <form method="GET" action="{{ url('/paquete') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                          
                        </form> </td></tr>

                                </tbody>
                            </table>
                             
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
