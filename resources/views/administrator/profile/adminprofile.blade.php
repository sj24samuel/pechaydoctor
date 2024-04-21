@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <main class="py-4">
        @include('layouts.adminnav')
        <div class="container-fluid mt-3">
            <div class="row">
                @include('layouts.adminsidebar')
                <div class=" col main-panel content-wrapper ">
                    <div class="row">
                        <h1 class="text-center">Admin Profile</h1>
                        <div class="container">
                            <h3>Admin ID: {{ session('admin')->id }}</h3>
                           <h3>Admin Name: {{ session('admin')->fname }} {{ session('admin')->lname }}</h3>
                           <h3>Admin Email: {{ session('admin')->email }}</h3>
                           <h3>Password: {{ session('admin')->password }}</h3>
                        </div>
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
