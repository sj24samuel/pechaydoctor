@extends('layouts.app')
@section('title', 'Reccomendation')
@include('layouts.nav')

@section('content')
 	<div class="container">
 		<h1>Treatment Calculator</h1>
 		<form method="post" action="{{ route('calculate') }}">
 			@csrf
 			<label>Type of Substance</label>
 			<select name="SubstanceType" id="Substance">
	 			@foreach ($data as $item)
	            	<option value="{{ $item->id }}">{{ $item->name }}</option>
	        	@endforeach
        	</select>
			<br>
 			<label>Number of Space</label>
 			<input type="number" id="area" name="area" step="0.01">
 			<select name="unit">
			  	<option value="1">Square Meters</option>
			  	<option value="2">Hectares</option>
			</select><br>
 			<input type="submit" name="Submit">
 		</form>
 	</div>
 	<div class="container">
 		@isset($result)
			<h2>Calculation Result</h2>
			<p>{{$result}}</p>
		@endisset	
 	</div>
@endsection



