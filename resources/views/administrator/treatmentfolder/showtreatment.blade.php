@extends('layouts.app')
@section('title', 'Treament Dosage')
@section('content')
    <main class="py-4">
        @include('layouts.adminnav')
        <div class="container-fluid mt-3">
            <div class="row">
                @include('layouts.adminsidebar')
                <div class=" col main-panel content-wrapper">
                    <div class="container">
                        <div class="d-flex">
                            <a class="btn btn-rounded btn-secondary text-light" href="/FPM">Back</a>
                            <a class="btn btn-rounded btn-secondary text-light" href=" {{ route('showupdateview', ['id' => $data->id]) }} ">Update</a>
                        </div>
                        <h1 class="text-center"> {{$data->name}} </h1> &nbsp
                        <h4 >Description</h4>
                        <p> {{$data->description}}</p> &nbsp
                        <h5 >Recommended Dosage</h5>
                        <p>The recommended dosage of <i> {{$data->name}} is <b> {{$data->dosage_}} {{$data->dosage_unit}} </b></i> </p>
                        <h5>Type of Substance: <small>{{$data->substance_type}}</small> </h5>
                        <h5>Application Measure: <small>{{$data->applicaiton_measure}}</small> </h5>
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
