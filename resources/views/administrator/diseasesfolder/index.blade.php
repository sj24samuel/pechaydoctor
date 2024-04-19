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
                       <h1>Disease Management</h1> 
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
