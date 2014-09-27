<?php
$product=$_POST["products"];
$category=$_POST["category"];
$flavour=$_POST["flavour"];
$price=$_POST["price"];
$file=$_POST["upload_file"];
 
class insertProduct{

private $db;
$db=new db();
public function insertData(){
$sql="INSERT INTO productDetail(product,category,flavour,price,image)VALUES('$product', '$category', '$flavour','$price','$file')";
$result=mysqli_query($db,$sql)) {
if($result==NULL)
  die('Error: ' . mysqli_error($con));
}
else
{
$data="data has entered";
return $data;
}
}
mysqli_close($con);
}
}


