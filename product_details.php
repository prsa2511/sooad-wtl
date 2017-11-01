<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>AutoKart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
  <script language="JavaScript">
<!--
function formSubmitter(formTag, messageTag){
  document.getElementById(messageTag).innerHTML = "Added to Cart";
  document.forms[formTag].submit();
}
</script>

<!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
        <option>All</option>
  			<option>ENGINES </option>
  			<option>TYRES </option>
  			<option>SEAT COVERS </option>
  			<option>OTHER </option>
		</select>
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
      <li class=""><a href="product_summary.php">Cart</a></li>
      	 <li class=""><a href="normal.php">Delivery</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
  <ul id="sideManu" class="nav nav-tabs nav-stacked">
    <li class="subMenu open"><a> BRANDS [3]</a>
      <ul>
      <li><a class="active" href="products.php"><i class="icon-chevron-right"></i>BMW </a></li>
      <li><a href="products.php"><i class="icon-chevron-right"></i>Volkswagen</a></li>
      <li><a href="products.php"><i class="icon-chevron-right"></i>Mercedes</a></li>
      </ul>
    </li>
    <li class="subMenu"><a> TYRES [30] </a>
    <ul style="display:none">
      <li><a href="products.php"><i class="icon-chevron-right"></i>Tyre type 1 (45)</a></li>
      <li><a href="products.php"><i class="icon-chevron-right"></i>Tyre type 2 (8)</a></li>
      <li><a href="products.php"><i class="icon-chevron-right"></i>Tyre type 3 (5)</a></li>
    </ul>
    </li>
    <li class="subMenu"><a>ENGINES [30]</a>
      <ul style="display:none">
      <li><a href="products.php"><i class="icon-chevron-right"></i>Engine1 (35)</a></li>
      <li><a href="products.php"><i class="icon-chevron-right"></i>Engine2 (8)</a></li>
    </ul>
    </li>
    <li><a href="products.php">SEAT COVERS [18]</a></li>
  </ul>
  <br/>
    <div class="thumbnail">
      <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
      <div class="caption">
        <h5>Payment Methods</h5>
      </div>
      </div>
</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>
	<div class="row">
			<div id="gallery" class="span3">
            <a href="themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="themes/images/products/large/3.jpg" style="width:100%" alt="Jbl Speakers"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                  </div>
                </div>
              <!--
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			  -->
              </div>
			</div>
			<div class="span6">
				<h3>Jbl Speakers  </h3>
				<small>- 600db</small>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm" name="cartsub">
				  <div class="control-group">
					<label class="control-label"><span>$222.00</span></label>
					<div class="controls">
					<input type="number" class="span1" placeholder="Qty."/>
					  <button type="submit" class="btn btn-large btn-primary pull-right" onclick="formSubmitter('cartsub','message')"> Add to cart <i class=" icon-shopping-cart"></i></button><div id='message'></div>
					</div>
				  </div>
				</form>

				<p>
				Design:CoaxialSensitivity (dB):90 to 91 dBMax RMS Power (Watts):280Box Contents:Pair OF 6.5"inch Car Speakers, User GuiThe JBL Series offers a frequency response that delivers the full-range response associated with exceptional sound

				</p>
				<a class="btn btn-small pull-right" href="#detail">More Details</a>
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>

			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              <li><a href="#profile" data-toggle="tab">Related Products</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2">Jbl</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2">CS-1200WSI</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> 34.4 x 34 x 19.8 cm</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Item Weight:</td><td class="techSpecTD2">4.5kg</td></tr>
				</tbody>
				</table>

				<h5>Features</h5>
				<p>
				Box Contents:1 Pair of 16.51 cm Car Sp,
				Design:Coaxial,
				The JBL Series offers a frequency response that delivers the full-range response associated with exceptional sound
				</p>

              </div>

	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<div  id="footerSection">
<div class="container">
  <div class="row">
    <div class="span3">
      <h5>ACCOUNT</h5>
      <a href="login.php">YOUR ACCOUNT</a>
      <a href="login.php">PERSONAL INFORMATION</a>
      <a href="login.php">ADDRESSES</a>
      <a href="login.php">DISCOUNT</a>
      <a href="login.php">ORDER HISTORY</a>
     </div>
    <div class="span3">
      <h5>INFORMATION</h5>
      <a href="contact.php">CONTACT</a>
      <a href="register.php">REGISTRATION</a>
      <a href="legal_notice.php">LEGAL NOTICE</a>
      <a href="tac.php">TERMS AND CONDITIONS</a>
      <a href="faq.php">FAQ</a>
     </div>
    <div id="socialMedia" class="span3 pull-right">
      <h5>SOCIAL MEDIA </h5>
      <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
      <a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
      <a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
     </div>
   </div>
  <p class="pull-right">&copy; PsP</p>
</div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
</body>
</html>
