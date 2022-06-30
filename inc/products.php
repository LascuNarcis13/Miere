<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="borcan.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>Detalii</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[1] = array(
	"name" => "Miere, Salcam",
	"img" => "img/shirts/honey_108.jpg",
	"price" => 40,
    "sizes" => array("Borcan mic(0,5Kg)")
);
$products[2] = array(
	"name" => "Miere, Poliflora",
    "img" => "img/shirts/honey_107.jpg",
    "price" => 30,
    "sizes" => array("Borcan mic(0,5Kg)")
);
$products[3] = array(
    "name" => "Miere, Tei",
    "img" => "img/shirts/honey_10.jpg",    
    "price" => 35,
    "sizes" => array("Borcan mic(0,5Kg)")
);
$products[4] = array(
    "name" => "Miere, Rapita",
    "img" => "img/shirts/honey_11.jpg",    
    "price" => 25,
    
    "sizes" => array("Borcan mic(0,5Kg)")
);
$products[5] = array(
    "name" => "Miere, Floarea Soarelui",
    "img" => "img/shirts/honey_12.jpg",    
    "price" => 25,
    "sizes" => array("Borcan mare(1Kg)")
);
$products[6] = array(
    "name" => "Miere, Manuka",
    "img" => "img/shirts/honey_13.jpg",    
    "price" => 70,
    "sizes" => array("Borcan mare(1Kg)")
);
$products[7] = array(
    "name" => "Polen, Poliflor",
    "img" => "img/shirts/honey_14.jpg",    
    "price" => 50,
    "sizes" => array("Borcan mare(1Kg)")
);
 $products[8] = array(
    "name" => "	Propolis, Tinctura de Propolis",
    "img" => "img/shirts/honey_15.jpg",    
    "price" => 20,
    "sizes" => array("Borcan mare(1Kg)")
);

?>