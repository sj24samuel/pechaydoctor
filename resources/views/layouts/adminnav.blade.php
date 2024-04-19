<!--Nav Bar-->
<nav class="navbar navbar-expand-md bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="/dashboard">Pechay Doctor</a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    	</button>
	</div>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<form class="d-flex" id="logout-form" action="{{ route('logout') }}" method="POST">
               @csrf
               <button class="btn btn-primary text-white" type="submit">Logout</button>
           </form>
		</ul>
	</div>
</nav>

