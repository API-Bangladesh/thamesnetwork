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
	

    <h3 style="margin-left:50px">THAMES OPTIC PRIVACY POLICY</h3>
<p style="text-align:left;font-size: 15px; margin-top: 15px;  margin-bottom: 100px;margin-right: 100px;
  margin-left: 80px; ">
	<b>1 .	WHO WE ARE?:</b><br>
 
    &nbsp; <b>1.1 </b>	This is the privacy policy of the Thames Network Limited. The controller will be the relevant company responsible for the website this privacy policy is locate on. Our main registered address is <b>Unit 50, New Lydenburg Street, SE7 8NE</b>, We provide telephony, broadband, fibre, TV and mobile services. We are responsible for your personal data as data controller.<br>
    
    <br>
    &nbsp;<b>1.2</b>	We have a data protection officer who is responsible for all of our issues relating to the protection of personal data. The data protection officer can be contracted at the below:
 <br>The Data Protection Officer<br>
<b>Thames Optic</b>,  <b>Unit 50</b> , <b>New Lydenburg Street</b> ,<b>London</b> ,<b>SE7 8NE</b> <br>
&nbsp;<b>1.3</b>This privacy policy applies from 5th April 2023 <br>
     <br>
     
     	<b>2  WHO DOES THE PRIVACY POLCY APPLY TO?</b><br>
 
    &nbsp; <b>2.1 </b> This privacy policy applies to<br>
	(a) Customer;<br>
	(b) Prospective customers;<br>
	(c) Individuals that use our websites;<br>
	(d) Former customers;<br>
	(e) Nominated users or individuals acting under a power of attorney; and <br>
	(f) Shareholders.<br>

    <br>
    &nbsp;<b>2.2 </b>Our services are not intended for children, unless we expressly state otherwise, and we do not knowingly collect or process personal data relating to children or anyone aged under 18 years.<br>
    
    
      <br> &nbsp;<b>2.3</b> It is important that the personal data we hold about you is accurate and current. It’s your responsibility to keep us up to date if you make any changes to your personal data it her through updating your My Account details or contracting us here.<br>
     <br>

    
  
    	<b>3 INFORMATION DO WE COLLECT?</b><br>
 
    &nbsp; <b>3.1 </b> Personal data is any information that can identify a natural person. We may collect, use, store and transfer different categories of personal data to enable us to deliver our services, as follows:<br>
	(a)<b>Data about your identity</b> including first name, last name, title, date of birth and gender;<br>
	(b) <b>Data about your contact details </b>including service address, correspondence/billing address, email address, landline telephone number and mobile phone number;
     <br>(c) <b>Financial data </b> including your bank account details for a direct debit and payment card details and your credit rating;
    <br>(d) <b>Data relating to a transaction </b> including details about payments to and from your and about the products and services that you have purchased from us;
     <br>(e) <b>Technical datain </b> cluding IP address, your login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform, ThamesOptic webmail emails, online chat logs and other information on the devices you use to access our services;
    <br>(f)<b> Data about your ThamesOptic profile </b>including your My Account username and password, your interests, preferences, feedback and survey responses;
    <br>(g) <b>Data about your usage</b> or potential usage of our products and servicesincluding the suitability of your property for certain products, the devices, set up or configurations you have, or might require, to use the services, the amount of time you spend online, the channels and programmes you watch and record, websites you visit, or when you make a call the number destination and length of your call;
    <br>(h) <b>Data relating to your marketing </b> and communications choices including what method you would like to receive marketing and how frequently; and 
     <br>(i) <b> Special categories of personal data </b> including information about your health that we may need to know to provide you with the best service for you and biometric data that you may give uss to gain quicker access to your account information.


    <br>
    &nbsp;<b>3.2 </b>We may also collect and use non-personal data ssuch as statistical or demographic data. This data may b derived from your personal data but is not considered personal data as this data cannot identify you.
    <br>
    
    
  
  	<br><b>4 HOW DO WE COLLECT INFORMATION?</b><br>
 
    &nbsp; <b>4.1 </b>4.1 Information you give us :<br>
	(a)<b>Data about your identity</b> including first name, last name, title, date of birth and gender;<br>

            (a) When you place an order with us for any of our services (for example over the phone, online or through a third party affiliate), we will need certain information to process your order. 
  <br> (b) When you contact us to discuss your services, we may ask for certain information to be able to confirm your identity, check our records and answer your questions quickly and accurately. 
   <br>(c) If you take part in any trials, complete any survey or enter any competitions we may ask for information about you, which we will make clear to you at the time and for the purpose we will be using this information. 
  
   <br>  &nbsp; <b>4.2 </b> Information we automatically collect </b>
  <br>(a) We will automatically collect information: 
  <br>(i) when you use our services; and
<br>(ii) when you visit our websites or use our mobile applications, we may collect and process information about your usage of these by using “cookies” and other similar ThamesOpticClassification: Private technologies to help us make improvements to the websites and to the services we make available. 

<br>(iii) when you download or use mobile applications created by us and, where applicable, have requested or consented to location services, we may receive information about your location and your mobile device, including a unique identifier for your device. We may use this information to provide you with location-based services, such as search results, and other personalised content. Most mobile devices allow you to turn off location services. Our mobile application does not collect precise information about the location of your mobile device.



 <br>&nbsp; <b>4.3 </b>Information we receive from other sources :<br>
 <br>(a) We may receive personal data about you from third parties and other entities, publicly available sources and companies within the ThamesOptic in the following categories: 
  <br>(i) companies contracted by us to help us provide services to you; 
  <br>(ii) other telecommunications operators when transferring services; 
 <br>(iii) marketing or market research organisations; 
   <br>(iv) credit reference agencies or fraud prevention agencies.

 
 
  <br><b> 5 HOW DO WE USE INFORMATION?</b><br>
  &nbsp; <b>5.1  </b>The information we collect and receive helps us to better understand what you need from us and to improve the provision of our services to you. :<br>
     &nbsp; <b>5.2  </b>We use the information collected for example to:  :
     
    <br> (a) verify your identity when you use our services or contact us; 
  <br>(b) process your enquiries, orders or applications, for example when assessing an application, we may use automated decision-making systems; 
   <br>(c) carry out credit checks and to manage your accounts (click here to see our Credit Reference Agency Information Notice); 
 <br>(d) monitor, record, store and use any telephone, e-mail or other electronic communications with you for training purposes, so that we can check any instructions given to us and to improve the quality of our customer service, and in order to meet our legal and regulatory obligations; 
 <br>(e) where you have agreed, provide you with information about other ThamesOpticservices, offers or products which you may be interested in and/or invite you to take part in our referral scheme; 
 <br>(f) to tell you about changes to our websites, services or terms and conditions; (
 <br>(g) carry out any personal data and/or marketing analysis, profiling or create statistical or testing information to help us personalise the services we offer you and to understand our users/customers better, understand what our users/customers want and how they use our products and services; 
  <br>(h) recover any monies you may owe to us for using our services;
  <br>(i) analyse our services with the aim of improving them; 
  <br>(j) prevent or detect a crime, fraud or misuse of, or damage to our network, and to investigate where we believe any of these have occurred; and 
  <br>(k) monitor network traffic from time to time for the purposes of backup and problem solving, for example our automated system may monitor email subjects to help with spam and malware detection. 
    <br> &nbsp; <b>5.3  </b>Your data may also be used for other purposes for which you give your specific permission or, in very limited circumstances, when required by law. <br>
    &nbsp; <b>5.4  </b>We may supplement the information directly collected by us with data from third parties (for example socio-demographic data, credit reference agencies and fraud prevention agencies etc.) to further improve our data quality as well as the services or products we offer customers.  <br>


    <br><b> 6 WHEN WILL WE SHARE YOUR DATA WITH OTHERS? </b><br>
  &nbsp; <b>6.1 </b>We may need to share your information with organisations outside ThamesOptice.g. to help us provide our services to you.  :<br>
     &nbsp; <b>6.2  </b>categories of non-ThamesOpticparties that we would share your details with are:<br>
     
     (a) Third party suppliers who help ThamesOpticto perform our services; 
    <br>(b) Professional advisors; 
     <br>(c) Law enforcement agencies; 
     <br>(d) Other companies as part of the process of selling one or more of our businesses or part of those businesses; and (e) Regulators (such as Ofcom or the ICO). 

       <br>  &nbsp; <b>6.3  </b>Where we share your information with third parties they are required to follow our express instructions in respect of the use of your personal information and they must comply with all applicable UK data protection laws to protect your information and keep it secure.<br>
  
   <br><b> 7 PROTECTING INFORMATION </b><br>
  &nbsp; <b>7.1 </b>We take protecting your data seriously, and will do our utmost to employ appropriate organisational and technical security measures to protect you against unauthorised disclosure or processing. <br>
     &nbsp; <b>7.2 </b>Unfortunately we cannot guarantee the security of transmitting information via the internet. We have tried to create a secure and reliable website and mobile application for our users in line with industry standards. However, we have no responsibility or liability for the security of personal information transmitted via the internet.  <br>

     <br><b>8 WHY DO WE PROCESS YOUR DATA? </b><br>
  &nbsp; <b>8.1 </b>We process each type of personal data for one the following reasons:  <br>
     (a) We need to process the data under our contract with you for our services; 
     <br>(b) We have a legitimate interest as a business processing your data
     <br>(c) We have a legal obligation to process the data; or 
     <br>(d) We have your consent (which you can withdraw at any time). <br>
      &nbsp; <b>8.2 </b> If you don’t provide us with the data we need then we may not be able to perform our contract with you and may need to terminate the contract. If this happens we will notify you as set out in our Terms and Conditions.  <br>

      <br><b>9 TRANSFERS OF DATA OUTSIDE OF THE UNITED KINGDOM  </b><br>
  &nbsp; <b>9.1 </b>From time to time the third parties we share our data with may be outside of the United Kingdom in countries that do not always have the same standard of data protection laws as the UK. However, we will have a contract in place to ensure that your information is adequately protected, and we will remain bound by our obligations under applicable UK data protection laws even when your personal information is processed outside of the UK. The sorts of measures we use to protect your data in this instance are security reviews of the organizations, contractual model clauses approved for use by the European Commission or other approved transfer mechanisms. <br>
    
    <br><b>10 WHY DO WE PROCESS YOUR DATA? </b><br>
  &nbsp; <b>10.1 </b>Unless there is a specific regulatory or legal requirement for us to keep your information longer, we will keep your information for as long as it is necessary for the purpose for which it was collected. <br>
    <br>&nbsp; <b>10.2 </b> To determine the appropriate retention period for personal data, we consider the amount, nature, and sensitivity of the personal data, the potential risk of harm from unauthorized use or disclosure of your personal data, the purposes for which we process your personal data and whether we can achieve those purposes through other means, and the applicable legal requirements.  <br>
    
    <br><b>11 YOUR RIGHTS  </b><br>
  &nbsp; <b>11.1 </b> As a data subject you have a number of personal rights under data protection laws in relation to your personal data. These are:  <br>
   (a) Subject access requests - You have a right to access personal data that we hold as a data controller. 
   <br>(b) Right to be forgotten - In certain circumstances you have a right to request that your personal data be erased from the systems within our control. 
   <br>(c) Rectification - You have a right to correct your personal data that we hold as a data controller. 
  <br>(d) Withdraw consent - Where we have offered you the right to consent to giving us your data, for instance with your marketing preferences, you have the right to withdraw your consent at any time. 
   <br>(e) Objection and restriction of processing - In certain circumstances, you have a right to object to or request we restrict our processing of your personal data. 
  <br>(f) Right to port – You have a right to receive certain information about you in a machine readable format
 <br> &nbsp; <b>11.2 </b> If you would like more information about these rights or how to apply them, please go to our help page.  <br>
 
 
  <br><b>12 COMPLAINTS </b><br>
  &nbsp; <b>12.1 </b> If you would like to make a complaint about our use of the personal data you should contact our Data Protection Officer at the details above. If we have not resolved your complaint, you can contact the UK data protection regulator, the Information Commissioner’s Office (ICO) (www.ico.org.uk). We would, however, appreciate the chance to deal with your concerns before you approach the ICO so please contact us in the first instance. <br>
     
    <br><b>13 CHANGES TO THIS PRIVACY POLICY  </b>We may update this privacy policy from time to time. The revised policy will be posted to this page
     
     
     
     
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