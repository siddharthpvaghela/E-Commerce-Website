<?php
include_once("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Cart</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
   <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
   <?php
   if(isset($_COOKIE["no_c"]))
{
   $t=$_COOKIE["no_c"];
}
else
{
   $t=0;
}?>
   <!-- Header -->
   <header class="header1">
      <!-- Header desktop -->
      <div class="container-menu-header">
         <div class="topbar">
            <div class="topbar-social">
               <a href="#" class="topbar-social-item fa fa-facebook"></a>
               <a href="#" class="topbar-social-item fa fa-instagram"></a>
               <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
               <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
               <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
               Free shipping for standard order over ₹1000
            </span>

            <div class="topbar-child2">
               <span class="topbar-email">
                  fashe@example.com
               </span>

               <div class="topbar-language rs1-select2">
                  <select class="selection-1" name="time">
                     <option>USD</option>
                     <option>EUR</option>
                  </select>
               </div>
            </div>
         </div>

         <div class="wrap_header">
            <!-- Logo -->
            <a href="index.php" class="logo">
               <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
               <nav class="menu">
                  <ul class="main_menu">
                     <li>
                        <a href="index.php">Home</a>

                     </li>

                     <li>
                        <a href="product.php">Shop</a>
                     </li>

                     <li class="sale-noti">
                        <a href="product.php">Sale</a>
                     </li>

                     <li>
                        <a href="orders.php">Orders</a>
                     </li>

                     <li>
                        <a href="about.php">About</a>
                     </li>

                     <li>
                        <a href="contact.php">Contact</a>
                     </li>
                  </ul>
               </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
               <a href="./account.php" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
               </a>

               <span class="linedivide1"></span>

               <div class="header-wrapicon2">
                  <a href="./cart.php">
                  <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                  <span class="header-icons-noti"><?php echo $t; ?></span>
</a>

               </div>
            </div>
         </div>
      </div>

      <!-- Header Mobile -->
      <div class="wrap_header_mobile">
         <!-- Logo moblie -->
         <a href="index.php" class="logo-mobile">
            <img src="images/icons/logo.png" alt="IMG-LOGO">
         </a>

         <!-- Button show menu -->
         <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
               <a href="#" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
               </a>

               <span class="linedivide2"></span>

               <div class="header-wrapicon2">
                  <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                  <span class="header-icons-noti">0</span>

                  <!-- Header cart noti -->
                  <div class="header-cart header-dropdown">
                     <ul class="header-cart-wrapitem">
                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-01.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 White Shirt With Pleat Detail Back
                              </a>

                              <span class="header-cart-item-info">
                                 1 x $19.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-02.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Converse All Star Hi Black Canvas
                              </a>

                              <span class="header-cart-item-info">
                                 1 x $39.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-03.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Nixon Porter Leather Watch In Tan
                              </a>

                              <span class="header-cart-item-info">
                                 1 x $17.00
                              </span>
                           </div>
                        </li>
                     </ul>

                     <div class="header-cart-total">
                        Total: $75.00
                     </div>

                     <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              View Cart
                           </a>
                        </div>

                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              Check Out
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
               <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
               </span>
            </div>
         </div>
      </div>

      <!-- Menu Mobile -->
      <div class="wrap-side-menu" >
         <nav class="side-menu">
            <ul class="main-menu">
               <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                  <span class="topbar-child1">
                     Free shipping for standard order over $100
                  </span>
               </li>

               <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                  <div class="topbar-child2-mobile">
                     <span class="topbar-email">
                        fashe@example.com
                     </span>

                     <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                           <option>USD</option>
                           <option>EUR</option>
                        </select>
                     </div>
                  </div>
               </li>

               <li class="item-topbar-mobile p-l-10">
                  <div class="topbar-social-mobile">
                     <a href="#" class="topbar-social-item fa fa-facebook"></a>
                     <a href="#" class="topbar-social-item fa fa-instagram"></a>
                     <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                     <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                     <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                  </div>
               </li>

               <li class="item-menu-mobile">
                  <a href="index.php">Home</a>
                  <ul class="sub-menu">
                     <li><a href="index.php">Homepage V1</a></li>
                     <li><a href="home-02.php">Homepage V2</a></li>
                     <li><a href="home-03.php">Homepage V3</a></li>
                  </ul>
                  <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Shop</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Sale</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="cart.php">Features</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="blog.php">Blog</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="about.php">About</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="contact.php">Contact</a>
               </li>
            </ul>
         </nav>
      </div>
   </header>

   <!-- Title Page -->
   <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/cart.jpg);">
      <h2 class="l-text2 t-center">
         Cart
      </h2>
   </section>

   <!-- Cart -->
   <section class="cart bgwhite p-t-70 p-b-100">
      <div class="container">
         <!-- Cart item -->
         <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
               <table class="table-shopping-cart">
                  <tr class="table-head">
                     <th class="column-1"></th>
                     <th class="column-2">Product</th>
                     <th class="column-3">Price</th>
                     <th class="column-4 p-l-70">Quantity</th>
                     <th class="column-5">Total</th>
                  </tr>

                  <?php
                  $total=0.0;
                  $ship=50.0;
                  $num=0;
                  if(isset($_COOKIE['no_c']))
                  $num=$_COOKIE['no_c'];
                  if($num>0)
                  {
                     $arrayName = $_COOKIE['c'];
                     $arr=0;
                     foreach ($_COOKIE['c'] as $key => $value)
                     {
                        # code...
                        $details[$arr++]=$value;
                     }
                     $s=0;
                     foreach ($details as $value) {
                        # code...
                        $img="images/" . $value . ".jpg";
                        $sql[$s]="SELECT * FROM posts_info WHERE id='$value'";
                        $exec=$conn->query($sql[$s++]);
                        $n=$exec->num_rows;
                        $row = mysqli_fetch_assoc($exec);
                        $total+=$row["p_price"];
                        echo "<tr class='table-row'> <td class='column-1'> <div class='cart-img-product b-rad-4 o-f-hidden'><img src='" . $img . "' alt='IMG-PRODUCT'> </div> </td>";
                        echo "<td class='column-2'>" . $row["p_name"] . "</td> <td class='column-3'>₹ " . $row["p_price"] . "</td> <td class='column-4' align='center'> <p style='margin-right: 30%;''>1</p> </td> <td class='column-5'>₹ " . $row["p_price"] . "</td> </tr>";
                     }
                  ?>
               </table>
            </div>
         </div>

         <!-- Total -->
         <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
               Cart Totals
            </h5>

            <!--  -->
            <div class="flex-w flex-sb-m p-b-12">
               <span class="s-text18 w-size19 w-full-sm">
                  Subtotal:
               </span>

               <span class="m-text21 w-size20 w-full-sm">
                  ₹ <?php echo $total; ?>
               </span>
            </div>

            <!--  -->
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
               <span class="s-text18 w-size19 w-full-sm">
                  Shipping:
               </span>

               <div class="w-size20 w-full-sm">
                  <span class="m-text21 w-size20 w-full-sm">
                     ₹ 50
                  </span>
               </div>
            </div>

            <!--  -->
            <div class="flex-w flex-sb-m p-t-26 p-b-30">
               <span class="m-text22 w-size19 w-full-sm">
                  Total:
               </span>

               <span class="m-text21 w-size20 w-full-sm">
                  ₹ <?php echo $total + $ship;?>
               </span>
            </div>

            <form action="detail.php" method="POST">
            <div class="size15 trans-0-4">
               <!-- Button -->
               <input type="hidden" name="total" value="<?php echo $total;?>">
               <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                  Confirm and Proceed to Checkout
               </button>
            </div>
         </form>
         </div>
      <?php }
      else
      {
         echo "<h2 align='center'>Cart is Empty!</h2>";
      }
      ?>
      </div>
   </section>



      <!-- Footer -->
   <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
      <div class="flex-w p-b-90">
         <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
               GET IN TOUCH
            </h4>

            <div>
               <p class="s-text7 w-size27">
                  Any questions? Let us know in store at 3rd floor, Somaiya Vidyavihar, Mumbai or call us on (+91) 96 716 6879
               </p>

               <div class="flex-m p-t-30">
                  <a href="https://www.facebook.com" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                  <a href="https://www.instagram.com" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                  <a href="https://www.pinterest.com" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                  <a href="https://www.snapchat.com" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                  <a href="https://www.youtube.com" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
               </div>
            </div>
         </div>

         <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
               Categories
            </h4>

            <ul>
               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Accessories
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Handmade Products
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Footwear
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Menswear
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Womenswear
                  </a>
               </li>
            </ul>
         </div>

         <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
               Links
            </h4>

            <ul>
               <li class="p-b-9">
                  <a href="./index.php" class="s-text7">
                     Home
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Shop
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Orders
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./about.php" class="s-text7">
                     About Us
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./contact.php" class="s-text7">
                     Contact Us
                  </a>
               </li>

            </ul>
         </div>

         <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
               Help
            </h4>

            <ul>
               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Track Order Status
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Returns
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Shipping
                  </a>
               </li>

            </ul>
         </div>

         <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
               Newsletter
            </h4>

            <form>
               <div class="effect1 w-size9">
                  <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                  <span class="effect1-line"></span>
               </div>

               <div class="w-size2 p-t-20">
                  <!-- Button -->
                  <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                     Subscribe
                  </button>
               </div>

            </form>
         </div>
      </div>

      <div class="t-center p-l-15 p-r-15">
         <a href="#">
            <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
         </a>

         <div class="t-center s-text8 p-t-20">
            Copyright © 2018. All rights reserved.
         </div>
      </div>
   </footer>



   <!-- Back to top -->
   <div class="btn-back-to-top bg0-hov" id="myBtn">
      <span class="symbol-btn-back-to-top">
         <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </span>
   </div>

   <!-- Container Selection -->
   <div id="dropDownSelect1"></div>
   <div id="dropDownSelect2"></div>



<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
   <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
   <script type="text/javascript">
      $(".selection-1").select2({
         minimumResultsForSearch: 20,
         dropdownParent: $('#dropDownSelect1')
      });

      $(".selection-2").select2({
         minimumResultsForSearch: 20,
         dropdownParent: $('#dropDownSelect2')
      });
   </script>
<!--===============================================================================================-->
   <script src="js/main.js"></script>

</body>
</html>