<?php
include_once '../controller/produitC.php';
include_once '../controller/panierC.php';
include_once '../model/produit.php';
$produitC= new produitC();
$produit= $produitC-> afficherProduitById($_GET);
$panier=new panierC();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>Panier</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/internal.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="inner-page">
<div id="page"> 
<?php include_once 'header.php' ?>
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          <div class="page-title">
            <h1><strong>Panier</strong></h1>
          </div>
          <div class="table-responsive">
            <form method="post" action="#">
              <fieldset>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Nom de Produit</span></th>
                      <th rowspan="1" class="hidden-phone"></th>
                      <th rowspan="1" class="hidden-phone"><span class="nobr">Move to Wishlist</span></th>
                      <th colspan="1" class="a-center"><span class="nobr">Prix</span></th>
                      <th class="a-center " rowspan="1">Quantité</th>
                      <th colspan="1" class="a-center">total</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="50"><button onclick="#" class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button>
                        <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                        <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>supp</span></button></td>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="" href="#"><img width="75" height="75" src="../assets/image/<?PHP echo $produit['imageP']; ?>"></a></td>
                      <td><h2 class="product-name"> <a href="#"><?PHP echo $produit['nomP']; ?></a> </h2></td>
                      <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                      <td class="a-center hidden-table"><a class="link-wishlist1 use-ajax" href="#">Move</a></td>
                      <td class="a-center hidden-table"><span class="cart-price"> <span class="price"><?PHP echo $produit['tarifPP']; ?></span> </span></td>
                      <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name=""></td>
                      <td class="a-center movewishlist"><span class="cart-price"> <span class="price"></span> </span></td>
                     <td class="a-center last"><a type="button" class="button remove-item" title="supprimer" href ="Delete.php?idP=<?= $produit['idP']; ?>"><span><span>supprimer</span></span></a></td>
                    </tr>
                  </tbody>
                </table>
              </fieldset>
            </form>
          </div>
          <!-- BEGIN CART COLLATERALS -->
          <div class="cart-collaterals row">
            <div class="col-sm-4">
              <div class="shipping">
                <h3>Estimate Shipping and Tax</h3>
                <div class="shipping-form">
                  <form id="shipping-zip-form" method="post" action="#">
                    <p>Enter your destination to get a shipping estimate.</p>
                    <ul class="form-list">
                      <li>
                        <label class="required" for="country"><em>*</em>Country</label>
                        <div class="input-box">
                          <select title="Country" class="validate-select" id="country" name="country_id">
                            <option value=""> </option>
                            <option value="AF">TUNISIE</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <label for="region_id">State/Province</label>
                        <div class="input-box">
                          <select title="State/Province" name="region_id" id="region_id">
                            <option value="">Please select region, state or province</option>
                            <option value="1" title="Alabama">Nabeul</option>
                            <option value="2" title="Alaska">Ariana</option>
                            <option value="3" title="Alabama">Tunis</option>
                            <option value="4" title="Alaska">Bizert</option>
                            <option value="5" title="Alaska">Gafsa</option>
                            <option value="4" title="Alaska">Douz</option>
                            <option value="5" title="Alaska">Sfax</option>
                            <option value="4" title="Alaska">Sousse</option>
                            <option value="5" title="Alaska">Jandouba</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <label for="postcode">Zip/Postal Code</label>
                        <div class="input-box">
                          <input type="text" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                    </ul>
                    <div class="buttons-set11">
                      <button class="button get-quote" title="Get a Quote" type="button"><span>obtenir un devis</span></button>
                    </div>
                    <!--buttons-set11-->
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="discount">
                <h3>Discount Codes</h3>
                <form method="post" action="#" id="discount-coupon-form">
                  <label for="coupon_code">Entrer votre coupon</label>
                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                  <input type="text" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                  <button value="Apply Coupon" class="button coupon " title="Apply Coupon" type="button"><span>Utiliser Coupon</span></button>
                </form>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="totals">
                <h3>le montant total du panier</h3>
                <div class="inner">
                  <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                    <colgroup>
                    <col>
                    <col width="1">
                    </colgroup>
                    <tfoot>
                      <tr>
                        <td colspan="1" class="a-left"><strong>Grand Total</strong></td>
                        <td class="a-right"><strong><span class="price">20dt</span></strong></td>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td colspan="1" class="a-left"> Subtotal </td>
                        <td class="a-right"><span class="price">30dt</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <ul class="checkout">
                    <li>
                      <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Paiment</span></button>
                    </li>
                    <br>
                    <li><a title="Checkout with Multiple Addresses" href="#">Checkout with Multiple Addresses</a> </li>
                    <br>
                  </ul>
                </div>
              </div>
              <!--inner--> 
              
            </div>
          </div>
          
          <!--cart-collaterals--> 
          
        </div>
      </div>
    </div>
  </section>
  
  <!-- Brand logo starts  -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!--item-->
            <div class="item"><a href="#"><img src="assets/images/b-logo3.png" alt="Image"></a> 
             <a href="#"><img src="assets/images/b-logo2.png" alt="Image"></a> 
             <a href="#"><img src="assets/images/b-logo1.png" alt="Image"></a>
             <a href="#"><img src="assets/images/b-logo4.png" alt="Image"></a> 
             <a href="#"><img src="assets/images/b-logo5.png" alt="Image"></a> 
            <a href="#"><img src="assets/images/b-logo6.png" alt="Image"></a> 
            <a href="#"><img src="assets/images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo ends  --> 
  
  
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>
<!--footer-->
<?php include_once 'footer.php' ?>
</body>

</html>

