<?php include("inc/products.php");

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: borcane.php");
	exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="borcane.php">Miere</a> &gt; <?php echo $product["name"]; ?></div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				</div>

				<div class="shirt-details">

					<h1><span class="price"><?php echo $product["price"]; ?> de Lei</span> <?php echo $product["name"]; ?></h1>

					

					<p class="note-designer">* Mierea este naturala 100% .</p>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>