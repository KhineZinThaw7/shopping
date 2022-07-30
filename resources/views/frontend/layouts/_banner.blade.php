<!-- ================ SECTION INTRO ================ -->
<section class="section-intro pt-3">
	<div class="container">
	<main class="card p-3">
		<div class="row">
			<aside class="col-lg-3"> 
				<ul class="list-group list-group-light">
                    @foreach ($categories as $category)
                        <li class="list-group-item px-3 border-0" aria-current="true">
                            <a href="#">{{ $category->name }}</a> 
                        </li>
                    @endforeach
                  </ul>
			</aside>
			<div class="col-lg-9">
				<article class="card-banner p-5 bg-primary" style="height: 360px">
					<div style="max-width: 500px">
			        <h2 class="text-white">Great products with <br> best deals </h2>
			        <p class="text-white">No matter how far along you are in your sophistication as an amateur astronomer, there is always one.</p>
			        <a href="#" class="btn btn-warning"> View more </a>
			        </div>
				</article>
			</div>
		</div>
	</main>
	</div> <!-- container end.// -->
</section>
<!-- ================ SECTION INTRO END.// ================ -->