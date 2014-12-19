@extends('layouts.basic')

@section('content')
	<div class="alert alert-success" role="alert">Hello there</div>
	 <div class="row">
	 	<div class="col-md-3">
 		       {!! @$data["sidebar"] !!}
	 	</div>
	 	<div class="col-md-8 col-md-offset-1">
 		       {!! @$data["main"] !!}
	 	</div>

      </div>
@stop