@extends('layouts.app')
@section('title', 'Treament Dosage')
@section('content')
    <main class="py-4">
        @include('layouts.adminnav')
        <div class="container-fluid mt-3">
            <div class="row">
                @include('layouts.adminsidebar')
                <div class=" col main-panel">
                    <div class="row">
                        <div class="container text-center">
                            <h1>Treatment Dosage Management</h1>
                            <p>These are some of the fertilizer and Pesticides that can help to boost and supplements the Pechay Plants</p>
                            <br>
                        </div>
                        <div class="container-fluid">
                            <div class="nav navbar d-flex">
                                <h3 class="text-start">Fertilizer and Pesticides Table</h3>
                                <a class="btn btn-info btn-rounded" href="/addnewtreatment">Add New Treatment</a>
                            </div>
                            <table class="text-center text table table-hover bg-light">
                                <thead>
                                    <td>No.</td>
                                    <td>Name</td>
                                    <td>Recommended Dosage</td>
                                    <td>Type of Subtance</td>
                                    <td>Application Measure</td>
                                    <td>Action</td>
                                </thead>
                                @foreach($data as $item)
                                    <tbody>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->dosage_ }} {{ $item->dosage_unit }}</td>
                                        <td>{{ $item->substance_type }}</td>
                                        <td>{{ $item->applicaiton_measure }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('showtreatmentview', ['id' => $item->id]) }}">View Details</a>
                                        </td>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
