@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading" style="
					    color: #333333;
					    background-color: #f5f5f5;
					    border-color: #ddd;
					    font-size: 45px;
					    font-family: fantasy;
					    align-content: center;
						">MediaApp</div>

					<div class="panel-body">
						<!--{{ trans('adminlte_lang::message.logged') }}-->
						<img class="img-responsive" src="{{ asset('/img/penrry.jpg') }}" alt="" width="900" height="900" border="9" >
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection
