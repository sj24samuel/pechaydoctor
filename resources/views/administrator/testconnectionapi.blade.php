@extends('layouts.app')
@section('title', 'Test API')
@section('content')
	<div class="container mt-5">
        <div class="row justify-content-center">
            <a href="/dashboard">Back to DashBoard</a>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Connect to Flask API</div>
                    <div class="card-body">
                        <form id="apiForm">
                            <div class="form-group">
                                <label for="apiEndpoint">API Endpoint</label>
                                <input type="text" class="form-control" id="apiEndpoint" placeholder="Enter API Endpoint URL">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="connectToApi()">Connect</button>
                        </form>
                        <div id="apiResponse" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function connectToApi() {
            var apiEndpoint = document.getElementById('apiEndpoint').value;
            var formData = {
                apiEndpoint: apiEndpoint
            };
            fetch('/connect-to-api', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('apiResponse').innerHTML = JSON.stringify(data);
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('apiResponse').innerHTML = 'Failed to connect to API.';
            });
        }
    </script>
@endsection