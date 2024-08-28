<?php
include_once 'header.php';
require_once 'includes/dbh.inc.php';
?>

<HTML> 

  <head> 
  
	<style> 
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4caf50;
    border: none;
    color: white;
    padding: 13px 28px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	font-size: 15;
}

input[type=text],input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: LightGray;
    color: white;
}
.bookingForm {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f7f7f7;
  margin-top: 10px;
  margin-bottom: 30px;
  box-shadow: 2px 7px 12px 6px #211e1c;
}

</style>

    <title>Booking Page</title>
	<link rel="stylesheet" type="text/css" href="Cabsonline_Style.css"> 
  </head> 
	
  <body>
    <div class = "bookingForm">
<H1 style="text-align: center;">Lets travel</H1>
  
	<H3 style="text-align: center;">Please fill the fields below to book a taxi</H3>
  <form>
			<table>
			<tr><td>Booking id:</td><td><input type="number" name="bid"></td></tr>
			<tr><td>Pick up address:</td><td><input type="text" name="Address"></td></tr>
			<tr><td>Destination suburb:</td><td><input type="text" name="Dsuburb"></td></tr>
			<tr><td>Pickup date:</td><td><input type="text" name="pDate">(dd/mm/yyyy)</td></tr>
			<tr><td>Pickup time:</td><td><input type="text" name="pTime">(HH:MM)</td></tr></table>
			<tr><td><center><input type="submit" value="BookNow!" /></center></td><td></td></tr>
		
	
		
  </form>
	
  <H3 style="text-align: center;"> <a href="taxitable.php">Select a Taxi</a></H3>
  <H3 style="text-align: center;"> <a href="login.php">login</a></H3>
</div>
<?php 
	if(isset($_GET['bid']) && isset($_GET['Address']) && isset($_GET['Dsuburb']) && isset($_GET['pDate']) && isset($_GET['pTime']))
	{
		
		
		
		$B_ID = trim($_GET['bid']);
		$Pickup_address = trim($_GET['Address']);
		$Destination_Suburn = trim($_GET['Dsuburb']);
		$Pickup_Date = trim($_GET['pDate']);
		$Pickup_Time = trim($_GET['pTime']);
		
		if(empty($B_ID)  || empty($Pickup_address) || empty($Destination_Suburn) || empty($Pickup_Date) || empty($Pickup_Time))
		{
			echo "Please provide details for all the fields";
			exit();
		}
		else
		{
			
			ValidateDateTime($Pickup_Date,$Pickup_Time);
			
			//if(ValidBookingTime($Pickup_Date,$Pickup_Time))
			//{
				CreateBooking($B_ID,$Pickup_address,$Destination_Suburn,$Pickup_Date,$Pickup_Time);
			//}
			//else
			//{
				//echo "Booking can be placed one hour after the current system time.";
				//exit();
			//}
		}
	}
	
	
	
	function ValidBookingTime($Date,$Time)
	{
		
		$dt = $Date.":".$Time;
		
		$Date = date_create_from_format('j/n/Y:H:i',$dt);
		
		if(date_format($Date,'Y/m/j:H:i') < date('Y/m/j:H:i',strtotime('+6 minute')))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	function ValidateDateTime($Pickup_Date,$Pickup_Time)
	{
		
		$DatePattern = "/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/(20\d\d)$/";
		
		$TimePattern = "/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/";
		
		$DateFlag = preg_match($DatePattern,$Pickup_Date);
		$TimeFlag = preg_match($TimePattern,$Pickup_Time);
		if($DateFlag != 1)
		{
			echo "Please enter the valid date in dd/mm/yyyy format";
				exit();
		}
		else
		{
			if($TimeFlag != 1)
			{
				echo "Please enter the valid time in HH:MM format";
				exit();
			}
		}
	}
	
	
	function CreateBooking($B_ID,$Pickup_address,$Destination_Suburn,$Pickup_Date,$Pickup_Time)
	{
		
		$status="assigned";
		$Pickup_Date = date_create_from_format('j/n/Y',$Pickup_Date);
		$Pickup_Date = date_format($Pickup_Date,'Y-m-j');
		//  $DBConnect = @mysqli_connect("OCTR11", "localhost","", "octr1")
		// Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
		// mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";
		
		$SQLstring = "INSERT INTO ride(booking_id, pick_up_location, drop_location, pickup_time, pickup_date,ride_status)  values('".$B_ID."','".$Pickup_address."','".$Destination_Suburn."','".$Pickup_Time."','".$Pickup_Date."','".$status."')";
		
		$queryResult = @mysqli_query($conn, $SQLstring)
		Or die ("<p>Unable to insert data into booking table.</p>"."<p>Error code ".
		mysqli_errno($conn). ": ".mysqli_error($conn)). "</p>";
		
		$SQLstring = "SELECT MAX(Booking_id) FROM Ride";		
		$queryResult = @mysqli_query($conn, $SQLstring)
		Or die ("<p>Unable to insert data into booking table.</p>"."<p>Error code ".
		mysqli_errno($conn). ": ".mysqli_error($conn)). "</p>";
		$row = mysqli_fetch_row($queryResult);
		$Pickup_Date = date_create_from_format('Y-m-j',$Pickup_Date);
		$Pickup_Date = date_format($Pickup_Date,'j/m/Y');
		echo "<p>Thank you! Your booking reference number is ".$row[0].". You will be picked up in front of your provided address at ".$Pickup_Time." on ".$Pickup_Date.".</p>";
		exit();
	}
		?>
		<!-- <H3> <a href="taxitable1.php">Back</a></H3>
		<H3> <a href="login.php">login</a></H3> -->
		
		
</body> 
</HTML>

<?php
    include_once 'footer.php';
?>