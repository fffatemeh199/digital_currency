<!-- header -->
<?php include_once "_header.php"; ?>

<!-- menu -->
<?php include_once "partials/_menu.php";?>

<?php
$session = $_SESSION;
$cart = [];
foreach ($session as $cartSession => $value) {
    if (substr($cartSession, 0, 5) == 'cart_') {
        $cart[$cartSession] = $value;
    }
}
$price = array_column($cart, 'price');
$price = array_sum($price);
?>

<div class="col-sm-12">
    <table class="table table-hover">


        <thead>

        <tr>
            <th>Product</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Price</th>
            <th class="text-center">Total</th>
        </tr>


        </thead>


        <tbody>
        <?php foreach ($cart as $item => $value): ?>
            <tr>

                <td class="col-sm-8 col-md-6 ">
                    <div class="media">
                        <a class="thumbnail pull-left" href="#">
                            <img class="media-object"
                                 src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png"
                                 style="width: 72px; height: 72px;">
                        </a>
                        <div class="media-body">
                            <h4 style="margin-left:10px;" class="media-heading">
                                <a href="<?php echo URL; ?>/"><?php echo $value['name']; ?></a>
                            </h4>
                        </div>
                    </div>
                </td>

                <td class="col-sm-1 col-md-1 text-center">
                    <strong><?php echo $value['quantity']; ?></strong>
                </td>


                <td class="col-sm-1 col-md-1 text-center">
                    <strong><?php echo $value['price'] / $value['quantity']; ?></strong>
                </td>

                <td class="col-sm-1 col-md-1 text-center">
                    <strong><?php echo $value['price']; ?></strong>
                </td>

                <td class="col-sm-1 col-md-1 text-center">
                    <a href="<?php echo URL; ?>/administrator/admin/cart/cartController.php?add-to-cart=<?php echo $value['id']; ?>"
                       class="btn btn-primary">
                        <span class="fa fa-remove">plus</span>
                    </a>
                </td>

                <td class="col-sm-1 col-md-1 text-center">

                    <a href="<?php echo URL; ?>/administrator/admin/cart/cartController.php?minus=<?php echo $value['id']; ?>"
                       class="btn btn-warning">
                        <span class="fa fa-remove">minus</span>
                    </a>

                </td>

                <td class="col-sm-1 col-md-1 text-center">
                    <a href="<?php echo URL; ?>/administrator/admin/cart/cartController.php?remove-cart=<?php echo $value['id']; ?>"
                       class="btn btn-danger">
                        <span class="fa fa-remove">remove</span>
                    </a>

                </td>

            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>

<div class="row ml-0 mr-0">
    <div class="col-md-3">
        <table class="table">
            <tr>

                <td><h3>Total</h3></td>
                <td class="font-weight-bold direction_rtl"><?php
                    echo $price;
                    ?> تومان
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row ml-0 mr-0">
    <div class="col-md-8 offset-2">
        <a href="<?php echo URL; ?>/administrator/admin/orders.php" class="btn btn-success btn-block">
            <span>ثبت درخواست</span>
        </a>
    </div>
</div>

<!-- footer -->
<?php include "_footer.php"; ?>

