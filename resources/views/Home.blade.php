@extends('layouts.app')
@section('title', 'Home')
@include('layouts.nav')
@section('content')
<div class="container-fluid">
	<div class="container landing-head">
		<img src="{{ asset('images/logo.png')}}">
		<h1 class="">PECHAY DISEASE RECOMMENDER</h1>
		<p class="">Growing Tomorrow&#39;s Health, One Leaf at a Time!</p>			
	</div>
	<div class="container text-center"
		<p>
			Welcome to Pechay Disease Recommender, your comprehensive solution for diagnosing and managing diseases affecting pechay crops. Our cutting-edge 
		    <br/>
		    system utilizes advanced algorithms and machine learning techniques to analyze plant symptoms, environmental factors, and historical data, providing 
		    <br/>
		    accurate disease recommendations tailored to your specific needs. Whether you&#39;re a seasoned farmer or just starting out, our user-friendly interface ensures
		    <br/>
		     easy navigation and quick access to actionable insights, empowering you to protect your pechay crops and optimize yields. Join us today and revolutionize 
		    <br/>
		    the way you safeguard your harvests!
		    <br>
		    <a class="btn btn-rounded text-light btn-primary" href="/upload">Get Started </a>
		</p>
	</div>
</div>
@endsection