
<!doctype html>
<html class="no-js" lang="zxx">

<?php include ('elements/header.php'); ?>

<body>

<?php include ('elements/top-bar.php'); ?>

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
                                <li class="breadcrumb-item">Shop</li>
                                <li class="breadcrumb-item active" aria-current="page">cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Quantity</th>
                                    <th class="pro-quantity">Price</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                /**
                                 * Created by PhpStorm.
                                 * User: Anukkrit
                                 * Date: 24-07-2019
                                 * Summary-
                                 * API Used-
                                 * Limitations-
                                 */
                                foreach ($_SESSION["cart_item"] as $key => $value)
                                {
                                    if (!empty($value['name'])){
                                        $pic_rows=$db->runQuery('SELECT * FROM itempic WHERE itID='.$key);
                                        // var_dump($pic_rows);
                                        // exit();
                                        echo "<tr>
                                    <td class=\"pro-thumbnail\"><a href=\"#\"><img class=\"img-fluid\" src='admin/".$pic_rows[0]['path']."' alt=\"Product\" /></a></td>
                                    <td class=\"pro-title\"><a href=\"#\">".$value['name']."</a></td>
                                    <td class=\"pro-quantity\">
                                        
                                            ".$value['quantity']."
               
                                    </td>
                                    <td class=\"pro-price\">&#x20b9<span>".$value['price']."</span></td>
                                    
                                    <td class=\"pro-remove\"><a href=\"#\" id='rmit'><i class=\"fa fa-trash-o\"></i></a></td>
                                </tr>";}


                                }


                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h6>Cart Totals</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">&#x20b9 <?php echo $_SESSION['totalprice'];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="#" class="btn btn-sqr d-block" data-toggle="modal" data-target="#largeModal">Proceed Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
</main>
<script>
    // $(document).ready(

    //     var price = parseInt($('td.pro-price').text())
    //     $.each(price,function(){

    //         console.log(price);
    //     })


    //     )




</script>


<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->
<?php include ('elements/footer.php'); ?>
<style>
    .fa{
        color:#c29958;
    }

</style>
<!-- Quick view modal start -->

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Enquire </h4></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3 ml-auto">
                        <a href=" https://api.whatsapp.com/send?phone=7042778760"><i class="fa fa-whatsapp fa-5x"></i>
                            <h3>Whatsapp</h3>
                    </div></a>

                    <div class="col-lg-3 ml-auto">
                        <a href="tel:7042778760"> <i class="fa fa-phone fa-5x"></i>
                            <h3>Phone</h3>
                    </div></a>
                    <div class="col-lg-3 ml-auto">
                        <a href="mailto:abc@example.com?subject = Order&body = Details"> <i class="fa fa-envelope fa-5x"></i>
                            <h3>Email</h3>
                    </div></a>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <h3>VimalSons</h3>

                </div>

                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>

<!-- Quick view modal end -->
</body>



</html>
