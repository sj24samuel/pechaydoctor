@extends('layouts.app')
@section('title', 'Upload')
@include('layouts.nav')
@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Pechay Disease Detection</div>

	                <div class="card-body">
	                    <form method="POST" action="{{ route('detectdisease') }}" enctype="multipart/form-data">
	                        @csrf
	                        <div class="form-group">
	                            <label for="image">Upload Image:</label>
	                            <input type="file" name="image" id="image" class="form-control-file">
	                        </div>
	                        <button type="submit" class="btn btn-primary">Detect Disease</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

<script>
        $(function() {
            $("#droppable").droppable({
                drop: function(event, ui) {
                    var draggableId = ui.draggable.attr("id");
                    $("#droppedItem").val(draggableId);
                    $(this).addClass("bg-success text-white").text("Item Dropped: " + draggableId);
                }
            });
            $(".draggable").draggable({
                revert: "invalid",
                zIndex: 1000,
                appendTo: "body"
            });
        });
    </script>

<h1>Disease Detection Result</h1>

    @isset($result)
        @if ($result === 'healthy')
            <p>The pechay leaf appears to be healthy.</p>
        @elseif ($result === 'diseased')
            <p>The pechay leaf appears to be diseased.</p>
        @else
            <p>No prediction available.</p>
        @endif
    @else
        <p>No result available.</p>
    @endisset
 @endsection
 