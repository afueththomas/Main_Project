<?php
include("config.php");
session_start();
$custid=$_SESSION["cus_id"];

		

if(isset($_POST["submit"]))
{
$pay_amount=$_POST['txt_total'];
$advance_amount=$_POST['txt_advance'];

}
$date=date("Y-m-d");
$commemt="payment success";
$sql=mysqli_query($con,"insert into tbl_payment(cus_id,netamount,advance,pay_date,comment)values('$custid','$pay_amount','$advance_amount','$date','$commemt')");

//echo ("insert into tbl_payment(cus_id,netamount,advance,pay_date,comment)values('$custid','$pay_amount','$advance_amount','$date','$commemt')");
if($sql)
		{
			echo "<script>alert('Payment Done Successfully!Agency Manger will contact you by E-mail ');window.location='../Customer/index.php';</script>";
		}
		
?>
