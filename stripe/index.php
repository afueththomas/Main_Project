<?php
include("dbConnect.php");

session_start();
$amount=$_SESSION["amount"];
$cid=$_SESSION["cus_id"];

$sql=mysqli_query($con,"select * from tbl_customer where customer_id=$cid");


$row=mysqli_fetch_array($sql);
 
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
    <h2>CHECKOUT</h2>
	<div class="main">
		<div class="content">
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
					</script>
		
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
                                      <form action="checkout.php" method="post">
												<div class="tab-for">				
													<h5> Total Amount</h5>
														<input type="text" name="txt_total" value="<?php echo $amount?>" readonly>
												</div>			
											
											<h3>Personal Information</h3>
										
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text" name="txt_email" readonly value="<?php echo $row["email"] ?>">
													<h5>FIRST NAME</h5>													
														<input type="text" name="txt_name" readonly value="<?php echo $row["fname"] ?>">
                                                    <h5>LAST NAME</h5>													
														<input type="text" name="txt_name" readonly value="<?php echo $row["lname"] ?>">
												</div>		
                                                
                                                

                                                <div id="buynow">
					<button class="btn__default" id="buy_now"> Pay Now </button>
				</div>
			</div>
	</div>		







    <input type="submit" name="submit" value="check-in" class="buy_now"/>


   <script>
        $(document).ready(function(){
           $(".buy_now").on('click',function(e){
                e.preventDefault();
                    var image_src = $(this).closest(".card").find("#image_src").attr("value");
                    var item_name = $(this).closest(".card").find("#item_name").attr("value");
                    var price = $(this).closest(".card").find("#price").attr("value");
                    var dt = '&image='+image_src+'&item_name='+item_name+'&price='+price;
                    var url = 'http://localhost/stripe/checkout.php?'+dt; 
                    
                    $.ajax({
                         url:url,
                         method:'GET',
                         success:function(){
                              window.location.href=url;
                         }
                    });
                   
                    
           });
          
        });
   </script>
</body>
</html>







