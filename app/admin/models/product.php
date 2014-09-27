<?php
	class ProductModel{
		public function insert($post){
		  $product = $post["products"];
		  $category = $post["category"];
		  $flavour = $post["flavour"];
		  $price = $post["price"];
		  $file = "";
		  $db = new DB();
		$sql="INSERT INTO productDetail(product,category,flavour,price,image)VALUES('$product', '$category', '$flavour','$price','$file')";
			$db->query($sql);
		}
	} 
?>
