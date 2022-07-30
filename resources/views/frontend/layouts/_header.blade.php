<header class="section-header">	
	<section class="header-main bg-white py-3">
		<div class="container">
			<div class="row gy-3 align-items-center">
				<div class="col-lg-2 col-sm-4 col-4">
					<a href="{{ route('home') }}" class="navbar-brand">
						<img class="logo" height="40" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/logo.svg">
					</a> <!-- brand end.// -->
				</div>
				<div class="order-lg-last col-lg-5 col-sm-8 col-8">
					<div class="float-end">
						<a href="#" class="btn btn-light"> 
						    <i class="fa fa-user"></i>  <span class="ms-1 d-none d-sm-inline-block">Sign in  </span> 
						</a>
						<a href="#" class="btn btn-light"> 
							<i class="fa fa-heart"></i>  <span class="ms-1 d-none d-sm-inline-block">Wishlist</span>   
						</a>
						<a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="btn btn-light"> 
							<i class="fa fa-shopping-cart"></i> <span class="ms-1">My cart </span> 
						</a>
			        </div>
				</div> <!-- col end.// -->
				<div class="col-lg-5 col-md-12 col-12">
					<form action="#" class="">
		              <div class="input-group">
		                <input type="search" class="form-control" style="width:55%" placeholder="Search">
		                <button class="btn btn-primary">
		                  <i class="fa fa-search"></i> 
		                </button>
		              </div> <!-- input-group end.// -->
		            </form>
				</div> <!-- col end.// -->
				
			</div> <!-- row end.// -->
		</div> <!-- container end.// -->
	</section> <!-- header-main end.// -->

	<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
		<div class="container">
			<button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbar_main">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link ps-0" href="#"> Categories </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Hot offers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Gift boxes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Menu item</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Menu name</a>
					</li>
					<li class="nav-item dropdown">
						<a
						class="dropdown-toggle nav-link"
						href="#"
						role="button"
						id="dropdownMenuLink"
						data-mdb-toggle="dropdown"
						aria-expanded="false"
					  >
						Others
					  </a>
					
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					  </ul>
					</li>
				</ul>
			</div> <!-- collapse end.// -->
		</div> <!-- container end.// -->
	</nav> <!-- navbar end.// -->
</header> <!-- section-header end.// -->