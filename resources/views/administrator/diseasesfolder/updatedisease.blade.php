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
                        <h1 class="text-center">Update the Content</h1>
                        <form method="POST" action="#">
                            <div class="form-group">
                                <label>Disease Name</label>
                                <input type="text" class="form-control" name="disease_name" value="{{$data->disease_name}}">
                            </div>
                            <div class="form-group">
                                <label>Scientific Name</label>
                                <input type="text" class="form-control" name="sciencetific_name" value="{{$data->scientific_name}}">
                            </div>
                            <div class="form-group">
                                <label>Desrciption</label>
                                <textarea name="description" class="form-control" id="description">{{$data->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Symptoms</label>
                                <textarea  name="symptoms" class="form-control" id="sypmtoms">{{$data->symptoms}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Control Measure</label>
                                <textarea  name="control_measure" class="form-control" id="control_measure">{{$data->control_measure}}</textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-rounded btn-primary text-light" type="submit" name="Update" id="update" value="Update">
                                <a class="btn btn-rounded btn-secondary text-light" href="/diseases">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
