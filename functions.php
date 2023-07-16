<?php

use database\DBcontoller;

require('database/DBcontoller.php');
require ('database/product.php');
require ('database/cart.php');
$db_awam=new DBcontoller();
$product_awam = new \database\product($db_awam);

//cart object
$Cart_awam =new  \database\cart($db_awam);

?>