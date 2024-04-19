@extends('layouts.app')
@section('title', 'Disease Management')
@section('content')
    <main class="py-4">
        @include('layouts.adminnav')
        <div class="container-fluid mt-3">
            <div class="row">
                @include('layouts.adminsidebar')
                <div class=" col main-panel content-wrapper ">
                    <div class="row">
                        <div class="container text-center">
                            <h1>Disease Management</h1>
                            <p>These are the diseases that the system can be detected</p>
                        </div>
                        <div class="container-fluid" >
                            <h1>Diseases Table</h1>
                            <table class="table table-hover">
                                <tr>
                                    <td>No.</td>
                                    <td>Name of Disease</td>
                                    <td>Scientific Name</td>
                                    <td>Control Measure</td>
                                    <td>action</td>
                                </tr>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->scienctific_name }}</td>
                                        <td>{{ $item->applicaiton_measure }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('showtreatmentview', ['id' => $item->id]) }}">View Details</a>
                                        </td>
                                    </tr>
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
