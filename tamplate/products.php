<style>

    @import url("https://fonts.googleapis.com/css?family=Muli");

    /*reset*/
    * {
        margin: 0;
        padding: 0;
    }

    /*product info */

    h1 {
        color: #ff6d39;
        font-family: "muli";
        font-weight: bold;
        font-size: 22px;
        margin-top: 21px;
        display: inline-block;
    }

    i.fa.fa-search {
        margin-left: 90px;
    }

    .product-name i {
        color: #ffffff;
        transition: 0.3s all ease;

    }

    .product-name i:hover {
        color: #ff6d39;

    }

    h3 {
        color: #ffffff;
        font-family: "muli";
        margin-top: 40px;
        font-size: 20px;
        font-weight: 500;
    }

    h2 {
        color: #ffffff;
        font-family: "muli";
        margin-top: 10px;
        font-weight: 800;
        font-size: 29px;
    }

    h4 {
        display: inline-block;
        color: #ffffff;
        font-family: "muli";
        margin-top: 10px;
        font-weight: bold;
        font-size: 20px;
    }

    h4.dis {
        display: inline-block;
        color: #ffffff;
        font-family: "muli";
        font-weight: 400;
        font-size: 17px;
        margin-left: 30px;
        text-decoration: line-through #ea3201;
    }

    h4.dis span {
        text-decoration: line-through #ea3201;
    }

    .discount {
        display: inline-block;
    }

    ul {
        list-style-type: none;
    }

    li {
        display: inline-block;
        margin-right: 25px;
    }

    ul li {
        color: #ffffff;
        font-family: "muli";
        margin-top: 20px;
        font-weight: 500;
        font-size: 11px;
    }

    .bg {
        width: 15px;
        height: 15px;
        text-align: center;
        padding: 2px;
        margin-right: 20px;
        transition: 0.3s all ease;
        border-radius: 50%;
    }

    .bg:hover {
        background-color: #ff6d39;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        cursor: pointer;
    }

    .yellow {
        content: "";
        width: 13px;
        height: 13px;
        background-color: #2e0418;
        border-radius: 50%;
        border: 2px solid rgba(0, 0, 0, 0);
        transition: 0.3s all ease;
    }

    .black {
        content: "";
        width: 13px;
        height: 13px;
        background-color: #f8f9fa;
        border-radius: 50%;
        border: 2px solid rgba(0, 0, 0, 0);
        transition: 0.3s all ease;
    }

    .blue {
        content: "";
        width: 13px;
        height: 13px;
        background-color: #02a2ca;
        border-radius: 50%;
        border: 2px solid rgba(0, 0, 0, 0);
        transition: 0.3s all ease;
    }

    .yellow:hover,
    .black:hover,
    .blue:hover {
        border: 2px solid #f76b39;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        cursor: pointer;
    }

    .foot {
        color: #ffffff;
        font-family: "muli";
        margin-top: 80px;

        margin-right: 50px;
        font-weight: 500;
        font-size: 20px;
        float: left;
        transition: 0.3s all ease;
    }

    .foot i:nth-child(1) {
        margin-left: 0;
        margin-right: 15px;
    }

    .foot:hover {
        color: #f76b39;
        cursor: pointer;
    }

    /*shoe slider indicator*/

    .left i {
        color: #ffd5c6;
        margin-top: 260px;
        transition: 0.3s all ease;
    }

    .fa-long-arrow-left {
        margin-left: -275px;
    }

    .fa-long-arrow-right {
        margin-left: 15px;
    }

    .left i:hover {
        cursor: pointer;
        color: #2a2f40;
    }

    /*main card*/

    .card {
        display: flex;
        align-items: center;
        background: #252831;
        height: 600px;
        width: 800px;
        margin: 0 auto;
        box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.4);
        margin-top: 2%;

    }

    .left {
        content: "";
        height: 395px;
        width: 330px;
        display: flex;
        align-items: center;
        background-color: #ff6d39;
        margin-left: 93px;
        border-radius: 0% 50% 50% 0%;
        position: absolute;
        z-index: 5;
        transition: transform .7s;
        box-shadow: 0 4px 8px 0 rgba(8, 1, 1, 0.4);
    }

    .left img {
        margin-left: -88px;
        margin-top: 80px;
        border-radius: 50px;
        opacity:0.9;
        transition: 0.5s;
    }

    .right {
        content: "";
        height: 395px;
        width: 550px;
        background-color: #2a2f40;
        z-index: 3;
        margin-left: 200px;
    }

    .product-info {
        position: absolute;
        margin-left: 245px;
        height: 380px;
        width: 305px;
        z-index: 10;
    }
    .rtl{
        direction: rtl;
    }
    .zoom-card:hover > img{
        opacity:1;
        transform: scale(1.3);

    }
    .zoom-card header {
        position:absolute;

        top: 120%;
        left: 0%;
        padding: 1px;
        border-radius:  25px;
        width: 450px;
        height: 90px;
        transition: all .5s;
        opacity:0;
    }
    .zoom-card:hover > header{

        opacity:1;
        width: 450px;
        height: 90px;
        transform: translateY(-120px);
    }

    .left:hover{
        transform: scale(1.08)
    }
    .zoom-card{

    }

</style>
<?php
use database\DBcontoller;

require('database/DBcontoller.php');
require ('database/product.php');
$db_awam=new DBcontoller();
$product_awam = new \database\product($db_awam);
$product_shuffle = $product_awam->getData();
$item_id = $_GET['item_id'] ?? 1;
foreach($product_shuffle as $item):
    // rest of the code

    if ($item['item_id'] == $item_id):
        ?>
        <div class="card">
            <div class="left">
                <div class="zoom-card">
                    <img src="<?php echo $item['item_image']?>" width="200" height="325" style="margin: 30px;" alt="shoe">
                </div>
                <i class="fa fa-long-arrow-left"></i>
                <i class="fa fa-long-arrow-right"></i>
            </div>
            <div class="right">
                <div class="product-info">
                    <div class="product-name">
                        <h1>الشيخ</h1>
                    </div>
                    <div class="details center">
                        <h3><?php echo $item['item_name']?></h3>
                        <h2><?php echo $item['item_brand']?></h2>
                        <hr class="m-0">
                        <table class="my-3 rtl" style="margin-top: 40px;">
                            <tr class="font-rale font-size-14">
                                <td style="color: #ffffff;">السعر السابق:</td>
                                <td style="color: #ffffff;"><strike>650<span>دينار</span></strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td style="color: #ffffff;">السعر بعد التخفيض:</td>
                                <td class="font-size-20 text-danger" style="color: #ffffff;"><?php echo $item['item_price']?><span>دينار</span><small class="text-dark font-size-12">&nbsp;&nbsp;يتضمن التوصيل مجاني</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td style="color: #ffffff;">لقد وفرت:</td>
                                <td style="color: #ffffff;"><span class="font-size-16 text-danger rtl">250دينار</span></td>
                            </tr>
                        </table>
                    </div>
                    <span class="foot"><i class="fa fa-shopping-bag"></i>إضافة إلي السلة</span>
                    <span class="foot"><i class="fa fa-shopping-cart"></i>أطلب لأن</span>
                </div>
            </div>
        </div>
    <?php
    endif;
endforeach;
?>