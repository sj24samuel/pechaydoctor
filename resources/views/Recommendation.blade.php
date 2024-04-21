@extends('layouts.app')
@section('title', 'Reccomendation')
@include('layouts.nav')

@section('content')
 	<div class="container card">
 		<h1 class = "text-center">Treatment Calculator</h1>
 		<form method="post" action="{{ route('calculate') }}">
 			@csrf
			<div class="form-group">
 			<label>Type of Substance</label>
 			<select class = "form-control" name="SubstanceType" id="Substance">
	 			@foreach ($data as $item)
	            	<option value="{{ $item->id }}">{{ $item->name }}</option>
	        	@endforeach
        	</select>
			</div>
			<br>
			<div class="form-group">
 			<label>Number of Space</label>
 			<input type="number" class="form-control" id="area" name="area" step="0.01">
			<div class="input-group-append">
				<select class="form-control" name="unit">
					<option value="1">Square Meters</option>
					<option value="2">Hectares</option>
				</select><br>
			</div>
			</div>
 			<input class="form-control" type="submit" name="Submit">
 		</form>
 	</div>
 	<div class="container text-center">
 		@isset($result)
		<div class="mt-4">
			<h2>Calculation Result</h2>
			<p>{{$result}}</p>
		</div>
		@endisset	
 	</div>
@endsection



