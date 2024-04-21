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
                    @if(session('authenticated') && session('admin'))
                        <h1>Welcome, {{ session('admin')->fname }}</h1>
                    @endif
                    </div>
                </div>
            </div> 
       </div>
    </main>
@include('layouts.adminfooter')
@endsection
