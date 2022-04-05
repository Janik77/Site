<div class="row">
	{foreach $shop as $item}
	<div class="col-md-3">
		<div class="card card-product-grid mar3 ten">
	 		<img src="./templates/images/phine1.png">
	 		<div class="card-body">
			<figcaption class="info">
	      		<h4 class="card-title"> <a href="" class="blc">{$item.name}</a></h4>
	      		<p class="card-text">{$item.price}т</p>
			</figcaption>
			</div>
		</div>
	</div>
	{/foreach}
</div>