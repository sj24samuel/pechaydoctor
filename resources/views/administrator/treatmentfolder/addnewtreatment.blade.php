@extends('layouts.app')
@section('title', 'Treament Dosage')
@section('content')
    <main class="py-4">
        @include('layouts.adminnav')
        <div class="container-fluid mt-3">
            <div class="row">
                @include('layouts.adminsidebar')
                <div class=" col main-panel content-wrapper">
                    <div class="container-fluid">
                        <div class="nav navbar d-flex">
                            <a class="btn btn-rounded btn-secondary text-light" href="/FPM">Back</a>
                        </div>
                        <h1 class="text-center">Add New Substance</h1>
                        <form method="post" action="/addtreatment">
                             @csrf
                            <div class="form-group">
                                <label for="name">Name of Substance</label>
                                <input id="name" type="text" name="name"  class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="dosage_">Reccomended Dosage</label>
                                <input id="dosage_" type="number" name="dosage_" step="0.01"  class="form-control" required >
                            </div>
                            <div class="form-group">
                                 <label for="Dosage_Unit">Dosage Unit</label>
                                <input id="dosage_unit" type="text" name="dosage_unit"  class="form-control" required >
                            </div>
                            <div class="form-group">
                                 <label for="substance_type">Type of Substance</label>
                                <input id="substance_type" type="text" name="substance_type"  class="form-control" required >
                            </div>
                            <div class="form-group">
                                 <label for="application_measure">Application Measure</label>
                                <input id="application_measure" type="text" name="application_measure"  class="form-control" required >
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary text-light">Add New Treatment</button>
                                <input type="reset" name="clear" class="btn btn-danger text-light">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('layouts.adminfooter')
@endsection
