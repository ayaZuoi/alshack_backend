<?php
// Initialize $product_awam variable with data

$product_shuffle = $product_awam->getData();
//request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //call method add to card
    $Cart_awam->addToCart($_POST['item_id'], $_POST['user_id']);
}

?>

<div class="grid">
    <?php foreach($product_shuffle as $item) { ?>
        <div class="grid-items">
            <div class="page-wrapper">
                <div class="page-inner">
                    <div class="row">
                        <div class="el-wrapper">
                            <div class="box-up">
                                <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img class="img" src="<?php echo $item['item_image']; ?>" /></a>
                                <div class="img-info">
                                    <div class="info-inner">
                                        <span class="p-name"><?php echo $item['item_name']; ?></span>
                                        <span class="p-company"><?php echo $item['item_brand']; ?></span>
                                    </div>
                                    <div class="a-size">التوصيل مجاني <span class="size">ضمان لمدة سنه</span></div>
                                </div>
                            </div>
                            <div class="box-down">
                                <div class="h-bg">
                                    <div class="h-bg-inner"></div>
                                </div>
                                <a class="cart" href="#">
                                    <span class="price"><?php echo $item['item_price']; ?></span>
                                    <span class="add-to-cart">
                                       <form method="post">
    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
    <input type="hidden" name="user_id" value="<?php echo '1'; ?>">
    <span class="txt" name="top_sale_submit">إضافة إلي السلة</span>
</form>

                  </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } // closing for loop ?>
</div>