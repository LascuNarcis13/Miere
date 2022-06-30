<?php include("inc/products.php"); ?><?php 
$pageTitle = "Catalogul cu Miere";
$section = "shirts";
include('inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Lascu Miere Catalogul cu Tipuri de Miere si alte produse Apicole</h1>

				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id,$product);
						}
					?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>