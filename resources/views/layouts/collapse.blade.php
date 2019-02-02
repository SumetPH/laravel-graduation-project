<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
	<div class="container-fluid">
		<!-- Toggler -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
		 aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Brand -->
		<a class="navbar-brand pt-0" href="/">
			@if (auth()->user()->firstname == 'Admin')
			<img src="/assets/img/brand/dds-danger.png" class="navbar-brand-img" alt="...">
			@else
			<img src="/assets/img/brand/dds-primary.png" class="navbar-brand-img" alt="...">
			@endif
		</a>
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="sidenav-collapse-main">
			<!-- Collapse header -->
			<div class="navbar-collapse-header d-md-none">
				<div class="row">
					<div class="col-6 collapse-brand">
						<a href="#">
							<img src="/assets/img/brand/logo-primary.png">
						</a>
					</div>
					<div class="col-6 collapse-close">
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
						 aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
			<!-- Form -->
			{{-- <form class="mt-4 mb-3 d-md-none">
				<div class="input-group input-group-rounded input-group-merge">
					<input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search"
					 aria-label="Search">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<span class="fa fa-search"></span>
						</div>
					</div>
				</div>
			</form> --}}
			<!-- Navigation -->
			@include('layouts.aside')
		</div>
	</div>
</nav>