<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
     
    } 

    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/shopping-cart-style.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
   
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
 <div class="container">
 </div>
 <?php include 'imageslider.php';?>
 <?php include 'shoppingcart.php';?>
 <div id="product-grid">
	<div class="txt-heading">Products</div>
	
		<div class="product-item">
        <a href="accessories.php">
			<div class="product-image"><img src="images/product-images/accessories.jpg" style="width:250px;height:155px;"></div>
			<div class="product-tile-footer">
			<div class="product-title">Accessories</div> 
			</div>
        </a>
		</div>
        <div class="product-item">
        <a href="laptop.php">
			<div class="product-image"><img src="images/product-images/laptop.jpg"></div>
			<div class="product-tile-footer">
			<div class="product-title">Laptop</div> 
			</div>
        </a>
		</div>
        <div class="product-item">
        <a href="mobilephones.php">
			<div class="product-image"><img src="images/product-images/mobile phones.jpg" style="width:250px;height:155px;"></div>
			<div class="product-tile-footer">
			<div class="product-title">Mobile Phones</div> 
			</div>
        </a>
		</div>

        
        <script>(function(w, d) { w.CollectId = "606583decc6de004cacda9e8"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>


        <footer class="page-footer blue text-center text-md-left mt-0"    >

<!--Footer Links-->
<div class="container-fluid"  >
    <div class="row" >

        <!--First column-->
        <div class="col-md-6" style=" width: 100% " >
            <h5 class="title mb-3">Footer Content</h5>
            <p>map.</p>
            <iframe src="map/admin-map.php" width="100%" height="300" style="border:none;"></iframe>
        </div>
        <!--/.First column-->

        <!--Second column-->
       
        <!--/.Second column-->
    </div>
</div>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>














































<!--Copyright-->
<div class="footer-copyright">
    <div class="container-fluid">
        © 2020 Copyright: <a href=""> Eshop</a>

    </div>
</div>
<!--/.Copyright-->

</footer>




<style>


.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}

</style>
        
	
</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>