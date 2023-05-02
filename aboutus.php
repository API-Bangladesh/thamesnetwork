<?php
session_start();
error_reporting(0);
include('includes/config.php');
$cid=intval($_GET['cid']);
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
				echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
		}else{
			$message="Product ID is invalid";
		}
	}
	
}
// COde for Wishlist
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else
{
mysqli_query($con,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','".$_GET['pid']."')");
echo "<script>alert('Product aaded in wishlist');</script>";
header('location:my-wishlist.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="Themesoptic Internet Communications Ltd is a private broadband internet service provider with 12 years of experience.Our ultrafast fiber, ultra-reliable and unlimited network can bring you broadband speed of up to 10Gbps. ">
		<meta name="author" content="Rumy Bhuyan">
	    <meta name="keywords" content="shop online, fiber, Broadband,  Fiber UK base, Broadband in UK, UK internet service Provide, net service provide, internet provider, House network, office network UK, United Kingdom Fiber service, hosting.">
	    <meta name="robots" content="all">

	    <title>Fibre broadband deals with UK based customer support</title>


	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/custom.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<link rel="shortcut icon" href="assets/images/icone.png">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
    <body class="cnt-home">
	
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	


<p style="text-align:left;font-size: 15px; margin-top: 20px;  margin-bottom: 100px;margin-right: 150px;
  margin-left: 80px; ">
	<b>Themesoptic Internet Communications Ltd is a private broadband internet service provider with 12 years of experience</b>
	<br>Our ultrafast fiber, ultra-reliable and unlimited network can bring you broadband speed of up to 10Gbps. We have a wide range of affordable business FTTP broadband packages.Unbitable Price Guarantee Our FTTP products give you the flexibility to much the delivery of gigabit-speed broadband services and dedicated VOIP channels to ensure QoS for those services key to your business.No Data Limits, Speeds of up to 330Mbps-Unlimited data with Thamesoptic. There are no catches, no caps and no hidden penalties, so your business can make the Ultrafast download speeds..<br>
“AUP” means Thamesoptic’s Acceptable Usage Policy, as updated from time to time.
“Battery Back-Up Unit” means a battery unit (i) which Thamesoptic sends the Customer upon the Customer’s request, (ii) which (when, fully charged and correctly installed) the Customer may use to provide the Thamesoptic, optical network terminal (ONT) and/or fibre/media converter with at least 1 hour of back-up power in the event of a power failure at the Premises, and (iii) which will enable the Customer to make calls to emergency services during that period using a corded telephone plugged directly into the Thamesoptic.<br>
“Battery Back-Up Unit Fee” means the one-off Charge payable for a Battery Back-Up Unit, as set out in Thamesoptic’s Guide to Charges and Fees for Business Customers and as set out in the Customer’s Order or Order Confirmation Email.
“Building” means a property in which the Premises are located, and to which Thamesoptic provides Landlord Services under a Landlord Agreement.<br>
”Business Broadband Package” means any of Thamesoptic’s packages for Business Broadband Services and Telephone Services (as set out in www.Thamesoptic.com/business or as otherwise offered by Thamesoptic to the Customer), for which the Customer has submitted or can submit an Order.
“Business Broadband Service” means Thamesoptic’s “always on” internet service, which is included in the Customer’s chosen Business Broadband Package. <br>
“Business Day” means any day other than (i) a Saturday or a Sunday or (ii) a public holiday (England and Wales).
“Business Support” means Thamesoptic’s Business Support Team which can be contacted by emailing business.support@Thamesoptic.com, on 0203 318 8216, or by using the ”Chat” function on the Website, 24 hours a day, 7 days a week.<br>
“Call Charges” means the Charges for calls made using the Telephone Service that are not included in the Customer’s Package Charge, calculated as detailed in the Guide to Charges and Fees for Business Customers.
”Changes” means any increase in the Charges or any other change to the Agreement or the Services which might reasonably be regarded as being to the Customer’s material detriment, as set out in Clause 20.2.
“Charge or Charges” means any or all charges payable to Thamesoptic in respect of the Services as detailed in the Guide to Charges and Fees for Business Customers and/or as set out in an Order and/or Order Confirmation Email.
”Claims” means all third party claims, actions or proceedings brought or threatened against Thamesoptic arising in connection with the use or misuse of the Services or any breach or contravention of these Terms or the Agreement, as set out in Clause 12.1. 
“Complaints Code of Practice” means Thamesoptic’s Complaints Code of Practice which sets out how Thamesoptic’s residential,, “small business” and “small not-for-profit organisation” customers 
</p>


</div>


		<?php include('includes/brands-slider.php');?>

</div>
</div>
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>