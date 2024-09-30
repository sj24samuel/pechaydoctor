@extends('layouts.app')
@section('title', 'Disease Management')
@section('content')
    <main class="py-4">
        @include('layouts.adminnav')
        <div class="container-fluid mt-3">
            <div class="row">
                @include('layouts.adminsidebar')
                <div class=" col main-panel content-wrapper">
                    <div class="container">
                        <div class="d-flex">
                            <a class="btn btn-rounded btn-secondary text-light" href="/diseases">Back</a>
                        </div>
                        <h1 class="text-center"> {{$data->disease_name}} </h1> &nbsp
                        <h3> {{$data->scientific_name}} </h3>
                        <h4 >Description</h4>
                        <p> {{$data->description}}</p> &nbsp
                        <h4>Symptoms</h4>
                        <p>{{$data->symptoms}}</p> &nbsp
                        <h4>Control Measure</h4>
                        <p>{{$data->control_measure}}</p>
                    </div>
                    <a class="btn btn-rounded btn-primary text-light" href=" {{ route('updatediseaseinfo', ['id' => $data->id]) }} ">Update</a>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
