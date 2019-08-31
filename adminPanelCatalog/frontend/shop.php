


<!doctype html>
<html class="no-js">


<?php include ('elements/header.php'); ?>
<body>
<?php include ('elements/top-bar.php'); ?>

<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 20-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */



if(isset($_GET['catid'])){

    $id=$_GET['catid'];

    $sql="SELECT * FROM category WHERE ctID=".$id;

    $cat=$db->runQuery($sql);

    echo "<script>console.log('".json_encode($cat[0])."')</script>";

    $disp="<li class='breadcrumb-item active' aria-current='page'>".$cat[0]['ctName']."</li>";

    $sql="SELECT * FROM item WHERE itCat=".$id;

    $res=$db->runQuery($sql);

}

if(isset($_GET['subid'])){

    $id=$_GET['subid'];

    $sql="SELECT * FROM subcategory INNER JOIN category ON subcategory.mcid=category.ctID WHERE id=".$id;

    $cat=$db->runQuery($sql);

    echo "<script>console.log('".json_encode($cat[0])."')</script>";

    $disp="<li class='breadcrumb-item'>".$cat[0]['ctName']."</li><li class='breadcrumb-item active' aria-current='page'>".$cat[0]['cat']."</li>";

    $sql="SELECT * FROM item WHERE itCat=".$id;

    $res=$db->runQuery($sql);

}
if(isset($_GET['subsubid'])){

    $id=$_GET['subsubid'];
    $sql="SELECT subsubcategory.*,subcategory.cat AS subct,category.* FROM `subsubcategory` INNER JOIN subcategory INNER JOIN category ON subsubcategory.scid=subcategory.id AND subcategory.mcid=category.ctID WHERE subsubcategory.id=".$id;

    $cat=$db->runQuery($sql);

    echo "<script>console.log('".json_encode($cat[0])."')</script>";
    $disp="<li class='breadcrumb-item'>".$cat[0]['ctName']."</li><li class='breadcrumb-item'>".$cat[0]['subct']."</li><li class='breadcrumb-item active' aria-current='page'>".$cat[0]['cat']."</li>";

    $sql="SELECT * FROM item WHERE itCat=".$id;

    $res=$db->runQuery($sql);

}




?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Category</li>
                                <?php echo $disp; ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <?php include 'elements/products.php'?>
</main>

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->
<?php include ('elements/footer.php'); ?>
</body>

<script>
    var ctr;
    ctr = 4;
    $(window).scroll(function() {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {

                if(ctr<4){
                  for (var i=0;i<4;i++)
                    $('#pdt').appendChild("<div class=\"col-lg-3 col-md-4 col-sm-6\">\n" +
                        "                                <!-- product grid start -->\n" +
                        "                                <div class=\"product-item\">\n" +
                        "                                    <figure class=\"product-thumb\">\n" +
                        "                                        <a href=\"product-details.html\">\n" +
                        "                                            <img class=\"pri-img\" src=\"assets/img/product/product-1.jpg\" alt=\"product\">\n" +
                        "                                            <img class=\"sec-img\" src=\"assets/img/product/product-18.jpg\" alt=\"product\">\n" +
                        "                                        </a>\n" +
                        "                                        <div class=\"product-badge\">\n" +
                        "                                            <div class=\"product-label new\">\n" +
                        "                                                <span>new</span>\n" +
                        "                                            </div>\n" +
                        "                                            <div class=\"product-label discount\">\n" +
                        "                                                <span>10%</span>\n" +
                        "                                            </div>\n" +
                        "                                        </div>\n" +
                        "                                        <div class=\"button-group\">\n" +
                        "                                            <a href=\"wishlist.html\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"><i class=\"pe-7s-like\"></i></a>\n" +
                        "                                            <a href=\"compare.html\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to Compare\"><i class=\"pe-7s-refresh-2\"></i></a>\n" +
                        "                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quick_view\"><span data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick View\"><i class=\"pe-7s-search\"></i></span></a>\n" +
                        "                                        </div>\n" +
                        "                                        <div class=\"cart-hover\">\n" +
                        "                                            <button class=\"btn btn-cart\">add to cart</button>\n" +
                        "                                        </div>\n" +
                        "                                    </figure>\n" +
                        "                                    <div class=\"product-caption text-center\">\n" +
                        "                                        <div class=\"product-identity\">\n" +
                        "                                            <p class=\"manufacturer-name\"><a href=\"product-details.html\">Platinum</a></p>\n" +
                        "                                        </div>\n" +
                        "                                        <ul class=\"color-categories\">\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-lightblue\" href=\"#\" title=\"LightSteelblue\"></a>\n" +
                        "                                            </li>\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-darktan\" href=\"#\" title=\"Darktan\"></a>\n" +
                        "                                            </li>\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-grey\" href=\"#\" title=\"Grey\"></a>\n" +
                        "                                            </li>\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-brown\" href=\"#\" title=\"Brown\"></a>\n" +
                        "                                            </li>\n" +
                        "                                        </ul>\n" +
                        "                                        <h6 class=\"product-name\">\n" +
                        "                                            <a href=\"product-details.html\">Perfect Diamond Jewelry</a>\n" +
                        "                                        </h6>\n" +
                        "                                        <div class=\"price-box\">\n" +
                        "                                            <span class=\"price-regular\">$60.00</span>\n" +
                        "                                            <span class=\"price-old\"><del>$70.00</del></span>\n" +
                        "                                        </div>\n" +
                        "                                    </div>\n" +
                        "                                </div>\n" +
                        "                                <!-- product grid end -->\n" +
                        "\n" +
                        "                                <!-- product list item end -->\n" +
                        "                                <div class=\"product-list-item\">\n" +
                        "                                    <figure class=\"product-thumb\">\n" +
                        "                                        <a href=\"product-details.html\">\n" +
                        "                                            <img class=\"pri-img\" src=\"assets/img/product/product-1.jpg\" alt=\"product\">\n" +
                        "                                            <img class=\"sec-img\" src=\"assets/img/product/product-18.jpg\" alt=\"product\">\n" +
                        "                                        </a>\n" +
                        "                                        <div class=\"product-badge\">\n" +
                        "                                            <div class=\"product-label new\">\n" +
                        "                                                <span>new</span>\n" +
                        "                                            </div>\n" +
                        "                                            <div class=\"product-label discount\">\n" +
                        "                                                <span>10%</span>\n" +
                        "                                            </div>\n" +
                        "                                        </div>\n" +
                        "                                        <div class=\"button-group\">\n" +
                        "                                            <a href=\"wishlist.html\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"><i class=\"pe-7s-like\"></i></a>\n" +
                        "                                            <a href=\"compare.html\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to Compare\"><i class=\"pe-7s-refresh-2\"></i></a>\n" +
                        "                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quick_view\"><span data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick View\"><i class=\"pe-7s-search\"></i></span></a>\n" +
                        "                                        </div>\n" +
                        "                                        <div class=\"cart-hover\">\n" +
                        "                                            <button class=\"btn btn-cart\">add to cart</button>\n" +
                        "                                        </div>\n" +
                        "                                    </figure>\n" +
                        "                                    <div class=\"product-content-list\">\n" +
                        "                                        <div class=\"manufacturer-name\">\n" +
                        "                                            <a href=\"product-details.html\">Platinum</a>\n" +
                        "                                        </div>\n" +
                        "                                        <ul class=\"color-categories\">\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-lightblue\" href=\"#\" title=\"LightSteelblue\"></a>\n" +
                        "                                            </li>\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-darktan\" href=\"#\" title=\"Darktan\"></a>\n" +
                        "                                            </li>\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-grey\" href=\"#\" title=\"Grey\"></a>\n" +
                        "                                            </li>\n" +
                        "                                            <li>\n" +
                        "                                                <a class=\"c-brown\" href=\"#\" title=\"Brown\"></a>\n" +
                        "                                            </li>\n" +
                        "                                        </ul>\n" +
                        "\n" +
                        "                                        <h5 class=\"product-name\"><a href=\"product-details.html\">Perfect Diamond Jewelry</a></h5>\n" +
                        "                                        <div class=\"price-box\">\n" +
                        "                                            <span class=\"price-regular\">$50.00</span>\n" +
                        "                                            <span class=\"price-old\"><del>$29.99</del></span>\n" +
                        "                                        </div>\n" +
                        "                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis\n" +
                        "                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam\n" +
                        "                                            rem, accusantium adipisci officia eaque.</p>\n" +
                        "                                    </div>\n" +
                        "                                </div>\n" +
                        "                                <!-- product list item end -->\n" +
                        "                            </div>")
                --ctr;
                }


            }


            
        }
    )


</script>

</html>
