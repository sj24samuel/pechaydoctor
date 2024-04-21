@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <main class="py-4">
        @include('layouts.adminnav')
        <div class="container-fluid mt-3">
            <div class="row">
                @include('layouts.adminsidebar')
                <div class=" col main-panel content-wrapper ">
                    <div class="row">
                    <h1>Admin Profile</h1>
                        @if($admin)
                            <p>Name: {{ $admin->fname }} {{ $admin->lname }}</p>
                            <p>Email: {{ $admin->email }}</p>
                        @else
                            <p>No admin data available</p>
                        @endif
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
