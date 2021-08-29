<?php
$con = mysqli_connect("localhost", "root", "", "keells");
if($con){
  echo "";
}
?>
<html>
<head>
  <title>Keells</title>

  <link rel="stylesheet" type="text/css" href="css/index.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWTriBYWJYEzM-ZxPwcZGQEibq1Y0oTic&callback&callback&callback=initMap&libraries=&v=weekly"
      defer>
    </script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #floating-panel {
        position: absolute;
        top: 1780px;
        left: 75%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 0x;
        padding-left: 10px;
      }

      #floating-panel {
        margin-left: -52px;
      }
    </style>
    <script>
      // If you're adding a number of markers, you may want to drop them on the map
      // consecutively rather than all at once. This example shows how to use
      // window.setTimeout() to space your markers' animation.
      const neighborhoods = [
        { lat: 6.9934, lng: 81.0550 }, 
        { lat: 6.9497, lng: 80.7891 },  
        { lat: 5.9549, lng: 80.5550 },  
        { lat: 7.2906, lng: 80.6337 },  
        { lat: 8.3114, lng: 80.4037 }, 
        { lat: 7.8742, lng: 80.6511 }, 
        { lat: 7.9403, lng: 81.0188 },
        { lat: 8.1540, lng: 80.3046 } 

      ];

      const neighborhoodsDetails = [
        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Badulla</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Ayomal</b>   </p>" + 
            "<p><b>Tomato(100Kg)</b>   </p>" +      
            "</div>" +
            "</div>",
         //   
        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Nuwara Eliya</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Roshan</b>   </p>" + 
            "<p><b>Eggs(500)</b>   </p>" +      
            "</div>" +
            "</div>"+
        "</div>",
        //
        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Matara</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Ishini</b>   </p>" + 
            "<p><b>Potato(150Kg)</b>   </p>" +         
            "</div>" +
            "</div>"+
        "</div>",
        //
        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Kandy</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Hiruni</b>   </p>" + 
            "<p><b>Pumpkin(200Kg)</b>   </p>" +       
            "</div>" +
            "</div>"+
        "</div>",
        //
        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Anuradhapura</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Ewantha</b>   </p>" + 
            "<p><b>Potato(100Kg)</b>   </p>" +      
            "</div>" +
            "</div>"+
        "</div>",
        //
        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Dabulla</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Kamal</b>   </p>" + 
            "<p><b>Onion(150Kg)</b>   </p>" +      
            "</div>" +
            "</div>"+
        "</div>",

        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Polonnaruwa</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Sunil</b>   </p>" + 
            "<p><b>Mango(500)</b>   </p>" +      
            "</div>" +
            "</div>"+
        "</div>",

        '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h1 id="firstHeading" class="firstHeading">Tamuttegama</h1>' +
            '<div id="bodyContent">' +
            "<p><b>Namal</b>   </p>" + 
            "<p><b>Banana(200Kg)</b>   </p>" +      
            "</div>" +
            "</div>"+
        "</div>"


      ];
      let markers = [];
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: { lat: 7.8731, lng: 80.7718 },
        });
      }

      function drop() {
        clearMarkers();

        for (let i = 0; i < neighborhoods.length; i++) {
          addMarkerWithTimeout(neighborhoods[i], neighborhoodsDetails[i], i * 200);
        }
      }

      function addMarkerWithTimeout(position, detail, timeout) {
       
        window.setTimeout(() => {
          // markers.push(
             const markerInstance =new google.maps.Marker({
              position: position,
              map,
              animation: google.maps.Animation.DROP,
            })
 
            const infowindow = new google.maps.InfoWindow({
              content: detail,
              maxWidth: 200,
            });

            markerInstance.addListener("click", () => {
              infowindow.open(map, markerInstance);
             });
          //);
        }, timeout);
      }

      function clearMarkers() {
        for (let i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        markers = [];
      }
    </script>
</head>
<body>
     <header class="header">
       <nav class="navbar navbar-style">
         <div class="container">
           <div class="navbar-header">
           
            <a href="/index.php"><img class="logo" src="images/keellslogo.png"></a>
          </div>
           
           <ul class="nav justify-content-end">
            <li><a class="nav-link" href="index.php">HOME</a></li>
            <li><a class="nav-link" href="about.php">ABOUT US</a></li>
            <li><a class="nav-link" href="contactus.php">CONTACT US</a></li>
            </ul>
          </div>
         </div>
       </nav>
        
       <div class="container">
       <div class="row">

            <div class="col-sm-6 banner-info">
                 <h1></h1>
                 <p class="big-text ">GET! Best Prices For Your Harvest From Keells</p>
                 <p>We like to buy your goods and quality harvest with best prices. 
                   So you can join with us and get a best value to your harvest.
                 </p>
                 <a class="btn btn-first" href="/keells/register_login/login.php">Login</a>
                 <a class="btn btn-second" href="/keells/register_login/register.php">Register</a>
            </div>

            <div class="col-sm-6 banner-image">
              <img class="img-fluid" src="images/unnamed.jpg" class="float-right">
            </div>
       </div>  
       </div>

       <div id="demo" class="carousel slide" data-ride="carousel">

        
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
      
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Slider 1.jpg" alt="">
          </div>

          <div class="carousel-item">
            <img src="images/Slider 2.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img src="images/Slider 3.jpeg" alt="">
          </div>
        </div>
      
       
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      
      </div>
      <br/>
      <h2 style="width: 900px; height: 500px; margin-left: 550px;color:#4CC417;font-size:100px;">Keells</h2>
      <p style="width: 900px; height: 500px;text-align: center;margin-left: 250px;margin-top:-380px;font-weight: bold;color:black;font-size:20px">Keells is proudly Sri Lankan, owned and operated over the last 25 years, delivering the freshest quality products, 
        along with great value, serving thousands of Sri Lankans every day.Keells was also the first retailer in Sri Lanka to commit to reduce by 50%, single use polythene bag and instore prepared food packaging by the year 2025, ensuring that as the business grows the impact on the environment is minimized and sustainable practices employed. 
        Over 57 of our stores also use solar power relying more on renewable sources of energy as another initiative towards being sustainable.</p>
       <br>
       
      <h1 style="margin-top:-250px;color:black;">Farmers Reports Map</h1>
      <br>
      <div id="floating-panel">
      <button id="drop" onclick="drop()">View Farmers Reports</button>
      </div>
      <div id="map"></div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    
    <h1 style="margin-top:-250px;color:black;">Our Stock Reports</h1>
       
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Quantity'],
          <?php
          $sql = "SELECT * FROM homechart";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Stock Vegetables'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
    </script>   

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['category', 'quantity'],
          <?php
          $sql = "SELECT * FROM homechart2";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Need Vegetables'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>  
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Quantity'],
          <?php
          $sql = "SELECT * FROM homechart3";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Stock Fruits'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>   

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Quantity'],
          <?php
          $sql = "SELECT * FROM homechart4";
          $fire = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['category']."',".$result['quantity']."],";
            }
          ?>
          ]);

        var options = 
        {
          title: 'Need Fruits'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

        chart.draw(data, options);
        
      }
        
      
    </script>  
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <div id="piechart1" style="width: 900px; height: 500px; margin: 0px;"></div>
        <div id="piechart2" style="width: 900px; height: 500px; margin-left: 650px; margin-top: -500px"></div>
        <div id="piechart3" style="width: 900px; height: 500px; margin: 0px"></div>
        <div id="piechart4" style="width: 900px; height: 500px; margin-left: 650px; margin-top: -500px"></div>
        
    <div class="footer-main-div">
    <div  class="footer-social-icons">
       <ul>
       <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
       <li><a href="#"><span class="fab fa-twitter"></span></a></li>
       <li><a href="#"><span class="fab fa-instagram"></span></a></li>
       </ul>
       </div>
    </br>
       <div class="footer-menu-one">
         <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="about.php">About us</a></li>
           <li><a href="contactus.php">Contact  Us</a></li>
         </ul>
       </div>

       </div> 
       <div class="footer-bttom">
         <p2>Copyright © 2021 Jaykay Marketing Services (Pvt) Ltd. All Rights Reserved</p2></br><p2><a href="/keells/keellsadmin_login/adminlogin.php">Admin Login</a></p2>
         
       </div>
      </header>
</body>
</html>