<body>
  <!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">
			<?php foreach ($products as $product): ?>
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="<?= $product['image']?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?= $product['name']?></h3>
							<strong class="product-price"><?= $product['price']?></strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 2 -->
				<?php endforeach; ?>


				</div>
			</div>
		</div>
		<!-- End Product Section -->
</body>
