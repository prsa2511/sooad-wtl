<?php
  include_once 'header.php';
 ?>
 <?php
 if(isset($_POST["MercedesBenz"]) || isset($_POST["BMW"]) || isset($_POST["Volkswagen"])){
 	if(isset($_POST["MercedesBenz"])){
 		$keyword = "mercedes";
 	}else if(isset($_POST["BMW"])){
 		$keyword = "bmw";
 	}else if(isset($_POST["Volkswagen"])){
 		$keyword = "volkswagen";
 	}
  include_once 'includes/dbh.inc.php';

  $limit = 6;
  $start = 0;
  //$product_query = "SELECT * FROM products LIMIT $start,$limit";

  $product_query = "SELECT * FROM products WHERE cat IN ('$keyword', 'all')  LIMIT $start,$limit";
  $run_query = mysqli_query($conn , $product_query);
  if(mysqli_num_rows($run_query) > 0){
   while($row = mysqli_fetch_array($run_query)){
     $pro_id    = $row['pid'];
     $pro_brand = $row['brand'];
     $pro_name = $row['name'];
     $pro_cat   = $row['cat'];
     $pro_price = $row['price'];
     $pro_image = $row['image'];
     echo "
     <form class='' action='includes/addtocart.inc.php' method='post'>

       <div class='col-md-3'>
             <div class='panel panel-info'>
               <div class='panel-heading'>$pro_name</div>
               <div class='panel-body'>
               <a href='productdescription.php'>
                 <img src='images/products/$pro_image' style='width:100px; height:100px;'/>
               </a>
               </div>
               <div class='panel-heading'>$.$pro_price.00
                 <button type='submit' name='$pro_id'>Add To Cart</button>
               </div>
             </div>
           </div>
        </form>
     ";
     //<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
 		}

  }
 	}


 ?>
