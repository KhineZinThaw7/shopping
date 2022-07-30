@extends('frontend.layouts.app')

@section('content')
@include('frontend.layouts._banner')
<!-- ================ SECTION PRODUCTS ================ -->
<section class="py-5">
<div class="container">

	<header class="section-heading">
		<h3 class="section-title">New products</h3>
	</header> 

	<div class="row">
        @foreach ($products as $product)
		<div class="col-lg-3 col-md-6 col-sm-6">
			<figure class="card card-product-grid">
				<a href="{{ route('products.detail', $product->id) }}" class="img-wrap"> 
					{{-- <span class="topbar"> <b class="badge bg-success"> Offer </b> </span> --}}
					<img src="{{ Storage::url($product->images[0]->path) }}" width="100%"> 
				</a>
				<figcaption class="figure-caption border-top p-3">
					<a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
					<a href="#" class="title text-truncate">{{ $product->name }}</a>
					<small class="text-muted">Sizes: S, M, XL</small>
					<div class="price-wrap">
						<span class="price">{{ $product->price }} MMK</span> 
                        {{-- <del class="price-old">$20</del> --}}
					</div> <!-- price-wrap.// -->
				</figcaption>
			</figure>
		</div> <!-- col end.// -->
        @endforeach
	</div> <!-- row end.// -->

</div> <!-- container end.// -->
</section>
<!-- ================ SECTION PRODUCTS END.// ================ -->

@endsection