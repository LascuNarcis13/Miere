<?php 
$pageTitle = "Miere de vanzare";
$section = "home";
include('inc/header.php'); ?>
		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/bee.xcf" alt="Mike the Frog says:">
				<div class="button">
					<a href="borcane.php">
						<h2>Salut, Eu sunt Lascu!</h2>
						<p>Verifica ultimele produse</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Lascu Miere Cele mai recente Produse</h2>

				<?php include("inc/products.php"); ?>
				<ul class="products">
					<?php 

						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position < 4) {
								$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
							}
						}
						echo $list_view_html;
					?>								
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>