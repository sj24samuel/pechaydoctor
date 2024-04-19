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
                        <h1 class="text-center">Update the Content</h1>
                        <form method="POST" action="#">
                            <div class="form-group">
                                <label>Name of Substance</label>
                                <input type="text" name="name_of_substance" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label>Desrciption</label>
                                <textarea>{{$data->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Recommended Dosage</label>
                                <input type="number" name="dosage_num" value="{{$data->dosage_}}">
                                <input type="text" name="dosage_unit" value="{{$data->dosage_unit}}">
                            </div>
                            <div class="form-group">
                                <label>Type of Substance</label>
                                <input type="text" name="substance_type" value="{{$data->substance_type}}">
                            </div>
                            <div class="form-group">
                                <label>Application Measure</label>
                                <input type="text" name="application_measure" value="{{$data->applicaiton_measure}}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-rounded btn-primary text-light" type="submit" name="Update" id="update" value="Update">
                                <a class="btn btn-rounded btn-secondary text-light" href="/FPM">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
