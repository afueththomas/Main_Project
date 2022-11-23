<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   -->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Fizzy an Online Aquariam Store</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Yield Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
  />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Libre+Franklin:400,500" rel="stylesheet">
</head>

<body>
  
    <!-- header -->
    <div class="headder-top d-md-flex" style="margin-top:-15px">
      <div id="logo">
        <h1>
          <a href="index.php">Fizzy</a>
        </h1>
      </div>
      <!-- nav -->
      <nav class="mx-md-auto">

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
          <li class="active">
            <a href="index.php">Home</a>
          </li>
         
        
          <li class="dropdown">
            <!-- First Tier Drop Down -->
            <label for="drop-2" class="toggle toogle-2">Manage
              <span class="fa fa-angle-down" aria-hidden="true"></span>
            </label>
            <a href="#">Manage
              <span class="fa fa-angle-down" aria-hidden="true"></span> 
            </a>
            <input type="checkbox" id="drop-2">
            <ul>
           <li>
                <a href="view_district.php" class="drop-text">District</a>
                <a href="view_location.php" class="drop-text">location</a>
                <a href="view_colour.php" class="drop-text">colour</a>
                <a href="view_type.php" class="drop-text">Type</a>
                <a href="view_shape.php" class="drop-text">shape</a>
                <a href="view_category.php" class="drop-text">category</a>
                <a href="viewproduct.php" class="drop-text">product</a>
</li>
            
            </ul>
            </li>
             <li class="active">
            <a href="view_booking.php">View Booking</a>
          </li>
          <li class="dropdown">
            <!-- First Tier Drop Down -->
            <label for="drop-2" class="toggle toogle-2">Reports
              <span class="fa fa-angle-down" aria-hidden="true"></span>
            </label>
            <a href="#">Reports
              <span class="fa fa-angle-down" aria-hidden="true"></span> 
            </a>
            <input type="checkbox" id="drop-2">
            <ul style="    width: 280%;">
           <li style="    width: 200%;">
               
                <a href="bookingreport.php" class="drop-text">Booking Report Between 2 Dates</a>
                 <a href="report_category_pie.php" class="drop-text"> Pie chart-Count of Product in Each Category
</a>
               <!-- <a href="report_category.php" class="drop-text">Category Report in Table</a>-->
                <a href="report_product.php" class="drop-text">Product Report in Table</a>
                 <a href="report_customer.php" class="drop-text">District Wise Customers</a>
                <a href="most_selled.php" class="drop-text">Top Category of Product</a>
</li>
            
            </ul>
            </li>
           <li class="active">
            <a href="../Guest/index.php">Logout</a>
          </li>
   
        </ul>
      </nav>
      <div class="social-icons">
        <ul>
          <li>
            <a href="#" class="facebook">
              <span class="fa fa-facebook"></span>
            </a>
          </li>

          <li>
            <a href="#" class="rss">
              <span class="fa fa-rss"></span>
            </a>
          </li>
          <li>
            <a href="#" class="twitter">
              <span class="fa fa-twitter"></span>
            </a>
          </li>
          <li>
            <a href="#" class="gmail">
              <span class="fa fa-envelope"></span>
            </a>
          </li>
        </ul>
      </div>
      <!-- //nav -->
    </div>
    <!-- //header -->
</body>
</html>