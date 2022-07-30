@extends('frontend.layouts.app')

@section('style')
<link href="/lightbox/dist/css/lightbox.min.css" rel="stylesheet" />
@endsection

@section('content')
<section class="py-5 bg-white">
    <div class="container">
    
    <div class="row">
    <aside class="col-lg-6">
      <article class="gallery-wrap"> 
        <div class="img-big-wrap img-thumbnail">
           <a href="{{ Storage::url($product->images[0]->path) }}" data-lightbox="image-1"> 
              <img height="500" src="{{ Storage::url($product->images[0]->path) }}" width="100%"> 
           </a>
        </div> <!-- img-big-wrap.// -->
        <div class="d-flex justify-content-center py-3">
            @foreach ($product->images as $image)
                <a href="{{ Storage::url($image->path) }}" data-lightbox="image-1" class="item-thumb mx-2"> 
                    <img width="60" height="60" src="{{ Storage::url($image->path) }}"> 
                </a>
            @endforeach
        </div> <!-- thumbs-wrap.// -->
      </article> <!-- gallery-wrap .end// -->
    </aside>
    <main class="col-lg-6">
      <article class="ps-lg-3">
        <h4 class="title text-dark">{{ $product->name }} </h4>
        <div class="rating-wrap my-3">
          <div class="d-flex">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/misc/stars-active.svg" class="me-3">
            <b class="label-rating text-warning"> 4.5</b>
            <span class="label-rating text-muted ms-5"> <i class="fa fa-shopping-basket"></i> 154 orders </span>
            <span class="label-rating text-success ms-5">In stock</span>
          </div>
        </div> <!-- rating-wrap.// -->
    
        <div class="mb-3"> 
          <var class="price h5">{{ $product->price }} MMK</var> 
        </div> 
    
        <p>{{ $product->description }}</p>
    
        <dl class="row">
          <dt class="col-3">Type:</dt>
          <dd class="col-9">Regular</dd>
    
          <dt class="col-3">Color</dt>
          <dd class="col-9">Brown</dd>
    
          <dt class="col-3">Material</dt>
          <dd class="col-9">Cotton, Jeans </dd>
    
          <dt class="col-3">Brand</dt>
          <dd class="col-9">Reebook </dd>
        </dl>
    
        <hr>
    
        <div class="row mb-4">
          <div class="col-md-4 col-6 mb-2">
            <label class="form-label">Size</label>
            <select class="form-select">
              <option>Small</option>
              <option>Medium</option>
              <option>Large</option>
            </select>
          </div> <!-- col.// -->
        </div> <!-- row.// -->
    
        <a href="#" class="btn  btn-warning"> Buy now </a>
        <a href="#" class="btn  btn-primary"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
        <a href="#" class="btn  btn-light"> <i class="me-1 fa fa-heart"></i> Save </a>
      
      </article> <!-- product-info-aside .// -->
    </main> <!-- col.// -->
    </div> <!-- row.// -->
    
    </div> <!-- container .//  -->
    </section>
@endsection