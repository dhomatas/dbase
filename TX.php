<?php
/*This file should receive a link somethong like this: http://noobix.000webhostapp.com/TX.php?unit=1&b1=1
If you paste that link to your browser, it should update b1 value with this TX.php file. Read more details below.
The ESP will send a link like the one above but with more than just b1. It will have b1, b2, etc...
*/

//We loop through and grab variables from the received the URL
foreach($_REQUEST as $key => $value)  //Save the received value to the key variable. Save each cahracter after the "&"
{
	//Now we detect if we recheive the id, the password, unit, or a value to update
 	
if($key =="un"){
$update_number = $value;
}
	
if($update_number == 1)
{
	if($key =="n1"){
		$SA1 = $value;
	}			
}
else if($update_number == 2)
{
	if($key =="n2"){
	$SA2 = $value;
	}			
}
else if($update_number == 3)
{
	if($key =="n3"){
	$SA3 = $value;
	}			
}
else if($update_number == 4)
{
	if($key =="n4"){
	$SA4 = $value;
	}			
}	
	
else if($update_number == 5)
	{
	if($key =="n1"){
	$VOLT = $value;
	}	
	if($key =="n2"){
	$AMBER = $value;
	}	
	if($key =="n3"){
	$FREQUENCY = $value;
	}
    if($key =="n4"){
	$KILOW = $value;
	}	
if($key =="n5"){
	$KILOVA = $value;
	}		
}
}//End of foreach


include("database_connect.php"); 	//We include the database_connect.php which has the data for the connection to the database


// Check  the connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Now we update the values in database
if($update_number == 1)	//If the received data is for SENT_NUMBER_1, we update that value
	{
		mysqli_query($con,"UPDATE ESPtable2 SET SA1 = $SA1 " );	
	}
else if($update_number == 2)	//The same and so on...
	{
		mysqli_query($con,"UPDATE ESPtable2 SET SA2 = $SA2"  );	;	
	}
else if($update_number == 3)
	{
		mysqli_query($con,"UPDATE ESPtable2 SET SA3 = $SA3"  );	;	
	}
else if($update_number == 4)
	{
		mysqli_query($con,"UPDATE ESPtable2 SET SA4 = $SA4"  );	;	
	}

else if($update_number == 5)
	{
		mysqli_query($con,"UPDATE ESPtable2 SET SA = $SA1, SA2 = $SA2, SA3 = $SA3" );	;	
	}



//In case that you need the time from the internet, use this line
date_default_timezone_set('UTC');
$t1 = date("gi"); 	//This will return 1:23 as 123

//Get all the values form the table on the database
$result = mysqli_query($con,"SELECT * FROM ESPtable2");	//table select is ESPtable2, must be the same on yor database

//Loop through the table and filter out data for this unit id equal to the one taht we've received. 
while($row = mysqli_fetch_array($result)) {
 
	
		//We update the values for the boolean and numebers we receive from the Arduino, then we echo the boolean
		//and numbers and the text from the database back to the Arduino
		$RA1 = $row['RA1']; $RA2 = $row['RA2'];	$RA3 = $row['RA3'];	$RA4 = $row['RA4'];	
		$RA5 = $row['RA5']; $RA6 = $row['RA6'];	$RA7 = $row['RA7'];	$RA8 = $row['RA8'];	
		$RB1 = $row['RB1']; $RB2 = $row['RB2'];	$RB3 = $row['RB3'];	$RB4 = $row['RB4'];	
		$RB5 = $row['RB5']; $RB6 = $row['RB6'];	$RB7 = $row['RB7'];	$RB8 = $row['RB8'];	
		$RC1 = $row['RC1']; $RC2 = $row['RC2'];	$RC3 = $row['RC3'];	$RC4 = $row['RC4'];	
		$RD1 = $row['RD1']; $RD2 = $row['RD2'];	$RD3 = $row['RD3'];	$RD4 = $row['RD4'];	
		
		$SA1 = $row['RS1']; $SA2 = $row['RS2'];	$SA3 = $row['SA3'];	$SA4 = $row['S4'];	
		$SA5 = $row['SA5']; $SA6 = $row['SA6'];	$SA7 = $row['SA7'];	$SA8 = $row['SA8'];	
		$SB1 = $row['SB1']; $SB2 = $row['SB2'];	$SB3 = $row['SB3'];	$SB4 = $row['SB4'];	
		$SB5 = $row['SB5']; $SB6 = $row['SB6'];	$SB7 = $row['SB7'];	$SB8 = $row['SB8'];	
		$SC1 = $row['SC1']; $SC2 = $row['SC2'];	$RC3 = $row['SC3'];	$SC4 = $row['SC4'];	
		$SD1 = $row['SD1']; $SD2 = $row['SD2'];	$SD3 = $row['SD3'];	$SD4 = $row['SD4'];	
		
		$n6 = $row['TEXT_1'];
		
		//Next line will echo the data back to the Arduino
	//	echo " _t1$t1##_b1$b1##_b2$b2##_b3$b3##_b4$b4##_b5$b5##_n1$n1##_n2$n2##_n3$n3##_n4$n4##_n5$n5##_n6$n6##";
	
 


	
}// End of the while loop
?>








