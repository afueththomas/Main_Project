<?php
include("config.php");
session_start();
$custid=$_SESSION["cus_id"];

		

if(isset($_POST["submit"]))
{
$pay_amount=$_POST['txt_total'];
}
$date=date("Y-m-d");
$commemt="payment success";
$sql=mysqli_query($con,"insert into tbl_payment(cus_id,netamount,pay_date,comment)values('$custid','$pay_amount','$date','$commemt')");

//echo ("insert into tbl_payment(cus_id,netamount,pay_date,comment)values('$custid','$pay_amount','$date','$commemt')");
if($sql)
		{
			echo "<script>alert('Payment Done Successfully!');window.location='../Customer/index.php';</script>";
		}
		
?>
