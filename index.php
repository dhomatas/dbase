<?php
$page = $_SERVER['PHP_SELF'];
$sec = "15";
?>


<html>
<head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">		
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	
	
	
	
	
<body>    
<?php
$user = 'root';$pass = '';$db = 'epanomi';
$con=mysqli_connect("localhost",$user,$pass,$db); 
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();}
$result = mysqli_query($con,"SELECT * FROM ESPtable2");

 
		     
echo "<table class='table' style='font-size: 30px;'>

	<thead>
		<tr>
		<th >Epanomi  </th>	
		</tr> 
	</thead>
	
    <tbody>
      <tr class='success'>
        <td>Isogeio</td>	
      </tr>  

		"; 
		  
//loop through the table and print the data into the table
while($row = mysqli_fetch_array($result)) {
	
    echo "<tr class='success';style=' margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center'>"; 	
	
	$colorOn = "#6ed829";
	$colorOff = "#e04141";
	
	$column1 = "RA1";
    $column2 = "RA2";
    $column3 = "RA3";
    $column4 = "RA4";
    $column5 = "RA5";
	$column6 = "RA6";
    $column7 = "RA7";
    $column8 = "RA8";
	
    $column9 = "RB1";
    $column10 = "RB2";
    $column11= "RB3";
    $column12= "RB4";
    $column13 = "RB5";
	$column14= "RB6";
    $column15 = "RB7";
    $column16= "RB8";
	
	$column17 = "RC1";
    $column18 = "RC2";
    $column19 = "RC3";
    $column20 = "RC4";
    $column21 = "RD1";
	$column22 = "RD2";
    $column23 = "RD3";
    $column24 = "RD4";
	
	
    $current_bool_1 = $row['RA1'];
	$current_bool_2 = $row['RA2'];
	$current_bool_3 = $row['RA3'];
	$current_bool_4 = $row['RA4'];
	$current_bool_5 = $row['RA5'];
	$current_bool_6 = $row['RA6'];
	$current_bool_7 = $row['RA7'];
	$current_bool_8 = $row['RA8'];
	$current_bool_9 = $row['RB1'];
	$current_bool_10 = $row['RB2'];
	$current_bool_11 = $row['RB3'];
	$current_bool_12 = $row['RB4'];
	$current_bool_13 = $row['RB5'];
	$current_bool_14 = $row['RB6'];
	$current_bool_15 = $row['RB7'];
	$current_bool_16 = $row['RB8'];
	$current_bool_17 = $row['RC1'];
	$current_bool_18 = $row['RC2'];
	$current_bool_19 = $row['RC3'];
	$current_bool_20 = $row['RC4'];
    $current_bool_21 = $row['RD1'];
	$current_bool_22 = $row['RD2'];
	$current_bool_23 = $row['RD3'];
	$current_bool_24 = $row['RD4'];
	
	if($current_bool_1 == 1){
    $inv_current_bool_1 = 0;
	$color_current_bool_1 = $colorOn;
	}
	else{
    $inv_current_bool_1 = 1;
	$color_current_bool_1 = $colorOff;
	}
	if($current_bool_2 == 1){
    $inv_current_bool_2 = 0;
	$color_current_bool_2 = $colorOn;
	}
	else{
    $inv_current_bool_2 = 1;
	$color_current_bool_2 = $colorOff;
	}
	if($current_bool_3 == 1){
    $inv_current_bool_3 = 0;
	$color_current_bool_3 = $colorOn;
	}
	else{
    $inv_current_bool_3 = 1;
	$color_current_bool_3 = $colorOff;
	}
	if($current_bool_4 == 1){
    $inv_current_bool_4 = 0;
	$color_current_bool_4 = $colorOn;
	}
	else{
    $inv_current_bool_4 = 1;
	$color_current_bool_4 = $colorOff;
	}
	if($current_bool_5 == 1){
    $inv_current_bool_5 = 0;
	$color_current_bool_5 = $colorOn;
	}
	else{
    $inv_current_bool_5 = 1;
	$color_current_bool_5 = $colorOff;
	}
	if($current_bool_6 == 1){
    $inv_current_bool_6 = 0;
	$color_current_bool_6 = $colorOn;
	}
	else{
    $inv_current_bool_6 = 1;
	$color_current_bool_6= $colorOff;
	}
	if($current_bool_7 == 1){
    $inv_current_bool_7 = 0;
	$color_current_bool_7 = $colorOn;
	}
	else{
    $inv_current_bool_7 = 1;
	$color_current_bool_7 = $colorOff;
	}
	if($current_bool_8 == 1){
    $inv_current_bool_8 = 0;
	$color_current_bool_8 = $colorOn;
	}
	else{
    $inv_current_bool_8 = 1;
	$color_current_bool_8 = $colorOff;
	}
	if($current_bool_9 == 1){
    $inv_current_bool_9 = 0;
	$color_current_bool_9 = $colorOn;
	}
	else{
    $inv_current_bool_9 = 1;
	$color_current_bool_9= $colorOff;
	}
	if($current_bool_10 == 1){
    $inv_current_bool_10 = 0;
	$color_current_bool_10 = $colorOn;
	}
	else{
    $inv_current_bool_10= 1;
	$color_current_bool_10 = $colorOff;
	}
	if($current_bool_11 == 1){
    $inv_current_bool_11 = 0;
	$color_current_bool_11 = $colorOn;
	}
	else{
    $inv_current_bool_11 = 1;
	$color_current_bool_11 = $colorOff;
	}
	if($current_bool_12 == 1){
    $inv_current_bool_12 = 0;
	$color_current_bool_12 = $colorOn;
	}
	else{
    $inv_current_bool_12= 1;
	$color_current_bool_12 = $colorOff;
	}
	if($current_bool_13 == 1){
    $inv_current_bool_13 = 0;
	$color_current_bool_13 = $colorOn;
	}
	else{
    $inv_current_bool_13 = 1;
	$color_current_bool_13 = $colorOff;
	} 
	if($current_bool_14 == 1){
    $inv_current_bool_14 = 0;
	$color_current_bool_14 = $colorOn;
	}
	else{
    $inv_current_bool_14 = 1;
	$color_current_bool_14 = $colorOff;
	}
	if($current_bool_15 == 1){
    $inv_current_bool_15 = 0;
	$color_current_bool_15 = $colorOn;
	}
	else{
    $inv_current_bool_15 = 1;
	$color_current_bool_15 = $colorOff;
	}
	if($current_bool_16 == 1){
    $inv_current_bool_16 = 0;
	$color_current_bool_16 = $colorOn;
	}
	else{
    $inv_current_bool_16 = 1;
	$color_current_bool_16 = $colorOff;
	}
	if($current_bool_17 == 1){
    $inv_current_bool_17 = 0;
	$color_current_bool_17 = $colorOn;
	}
	else{
    $inv_current_bool_17= 1;
	$color_current_bool_17 = $colorOff;
	}
	if($current_bool_18 == 1){
    $inv_current_bool_18 = 0;
	$color_current_bool_18 = $colorOn;
	}
	else{
    $inv_current_bool_18 = 1;
	$color_current_bool_18= $colorOff;
	}
	if($current_bool_19== 1){
    $inv_current_bool_19 = 0;
	$color_current_bool_19 = $colorOn;
	}
	else{
    $inv_current_bool_19= 1;
	$color_current_bool_19 = $colorOff;
	}
	if($current_bool_20 == 1){
    $inv_current_bool_20= 0;
	$color_current_bool_20 = $colorOn;
	}
	else{
    $inv_current_bool_20 = 1;
	$color_current_bool_20 = $colorOff;
	} 
	if($current_bool_21 == 1){
    $inv_current_bool_21 = 0;
	$color_current_bool_21 = $colorOn;
	}
	else{
    $inv_current_bool_21 = 1;
	$color_current_bool_21 = $colorOff;
	}
	if($current_bool_22== 1){
    $inv_current_bool_22 = 0;
	$color_current_bool_22= $colorOn;
	}
	else{
    $inv_current_bool_22 = 1;
	$color_current_bool_22= $colorOff;
	}
	if($current_bool_23 == 1){
    $inv_current_bool_23 = 0;
	$color_current_bool_23 = $colorOn;
	}
	else{
    $inv_current_bool_23 = 1;
	$color_current_bool_23 = $colorOff;
	}
	if($current_bool_24 == 1){
    $inv_current_bool_24 = 0;
	$color_current_bool_24 = $colorOn;
	}
	else{
    $inv_current_bool_24 = 1;
	$color_current_bool_24 = $colorOff;
	}
		
    $column25 = "TEXT_1"; 
    $current_text_1 = $row['TEXT_1'];
	
	   	
    $column26 = "VOLT";
    $column27 = "AMBER";
    $column28 = "FREQUENCY";
    $column29 = "KILOW";
    $column30 = "KILOVA";
	
    $current_num_1 = $row['VOLT'];
	$current_num_2 = $row['AMBER'];
	$current_num_3 = $row['FREQUENCY'];
	$current_num_4 = $row['KILOW'];
	$current_num_5 = $row['KILOVA'];
	
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_1    >	
  	<input type='hidden' name='column' value=$column1 >
  	<input type= 'submit'  value='Saloni1'
			style=' 
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center;
			background-color: $color_current_bool_1
			' 
			></form></td>";
	
     
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_2   >	
  	<input type='hidden' 	name='column' value=$column2 >
  	<input type= 'submit'  value='Saloni2'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_2
			'
			></form></td>";
	
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_3   >	
  	<input type='hidden' 	name='column' value=$column3 >
  	<input type= 'submit'  value='Bedroom'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_3
			'
			></form></td>";
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_4   >	
  	<input type='hidden' 	name='column' value=$column4 >
  	<input type= 'submit'  value='Elisavet'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_4
			'
			></form></td>";
	
   echo "</tr>";
   echo "<tr class='success'>"; 	
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_5  >	
  	<input type='hidden' 	name='column' value=$column5 >
  	<input type= 'submit'  value='Dorothea'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_5
			'
			></form></td>"; 
	
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_6   >	
  	<input type='hidden' 	name='column' value=$column6 >
  	<input type= 'submit'  value='Diadromos'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_6
			'
			></form></td>";
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_7   >	
  	<input type='hidden' 	name='column' value=$column7 >
  	<input type= 'submit'  value='      W C      '	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_7
			'
			></form></td>";
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_8  >	
  	<input type='hidden' 	name='column' value=$column8 >
  	<input type= 'submit'  value='Eisodos'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_8
			'
			></form></td>";

	
	 echo "</tr>";
	 
   echo "<tr class='danger'>"; 	
	echo "<td>Ypogeio</td>	";
	 echo "</tr>";
	 
   echo "<tr class='danger'>"; 	
		
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_9   >	
  	<input type='hidden' 	name='column' value=$column9>
  	<input type= 'submit'  value='Skala'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_9
			'
			></form></td>";
     
	
	echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_10   >	
  	<input type='hidden' 	name='column' value=$column10>
  	<input type= 'submit'  value='      W C      '	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_10
			'
			></form></td>";
	
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_11   >	
  	<input type='hidden' 	name='column' value=$column11 >
  	<input type= 'submit'  value='     T V     '	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_11
			'
			></form></td>";
	
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_12   >	
  	<input type='hidden' 	name='column' value=$column12 >
  	<input type= 'submit'  value='Trapezaria'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_12
			'
			></form></td>";
	
   echo "</tr>";
   echo "<tr class='danger'>"; 	
	
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_13   >	
  	<input type='hidden' 	name='column' value=$column13 >
  	<input type= 'submit'  value='Koyzina'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_13
			'
			></form></td>";
	
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_14   >	
  	<input type='hidden' 	name='column' value=$column14 >
  	<input type= 'submit'  value='Diadromos'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_14
			'
			></form></td>";
	
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_15   >	
  	<input type='hidden' 	name='column' value=$column15 >
  	<input type= 'submit'  value='   Sak   '	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_15
			'
			></form></td>";
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_16   >	
  	<input type='hidden' 	name='column' value=$column16 >
  	<input type= 'submit'  value='Cinema'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_16
			'
			></form></td>";
    echo "</tr>";
	   echo "<tr class='info'>"; 	
	echo "<td>kipos</td>	";
	 echo "</tr>";
	 
   echo "<tr class='info'>"; 	
		
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_17   >	
  	<input type='hidden' 	name='column' value=$column17 >
  	<input type= 'submit'  value='proboleis'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_17
			'
			></form></td>";
 echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_18  >	
  	<input type='hidden' 	name='column' value=$column18 >
  	<input type= 'submit'  value='Eisodos'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_18
			'
			></form></td>";
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_19   >	
  	<input type='hidden' 	name='column' value=$column19 >
  	<input type= 'submit'  value='Perifraksi'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_19
			'
			></form></td>";
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_20   >	
  	<input type='hidden' 	name='column' value=$column20 >
  	<input type= 'submit'  value='Perimetros'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_20
			'
			></form></td>";			
	
	 
	
 echo "</tr>";
	   echo "<tr class='warning'>"; 	
	echo "<td>Masters</td>	";
	 echo "</tr>";
	 
   echo "<tr class='warning'>"; 	
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_21  >	
  	<input type='hidden' 	name='column' value=$column21 >
  	<input type= 'submit'  value='Wellcome'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_21
			'
			></form></td>";		
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_22   >	
  	<input type='hidden' 	name='column' value=$column22 >
  	<input type= 'submit'  value='Goodbue'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_22
			'
			></form></td>";		
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_23   >	
  	<input type='hidden' 	name='column' value=$column23 >
  	<input type= 'submit'  value='Ola On'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_23
			'
			></form></td>";		
echo "<td>
	<form action= update_values.php method= 'post'>	
	<input type='hidden' name='value' value=$inv_current_bool_24  >	
  	<input type='hidden' 	name='column' value=$column24 >
  	<input type= 'submit'  value='Balconies on'	 
			style='
			margin-left: 25%; margin-top: 10%; font-size: 30px; text-align:center; 
			background-color: $color_current_bool_24
			'
			></form></td>";					
 
	
	
	echo "</tr>";  
	
  echo "<table class='table' style='font-size: 30px;'>
	<thead>
		<tr class = 'success'>
	      <td>  * * * * TEXT * * * *  </td>	 
       </tr> 
   </thead>
	
    <tbody>
      <tr class='active'>
     	 <td><form action= update_values.php method= 'post'>
  	<input style='width: 100%;' type='text' name='value' value=$current_text_1  size='100'>
   	<input type='hidden' name='column' value=$column25 >
  	<input type= 'submit' value='Send'
         	style='text-align:center' >
			</form></td>";
	
    echo "</tr>
  </tbody>"; 
  	
		

 echo "<table class='table' style='font-size: 30px;'>
	<thead>
		<tr>
		<th>EParameters</th>	
		</tr>
	</thead>
	
    <tbody>
      <tr class='success'>
        <td>VOLTS</td>
        <td>AMBERS</td>
        <td>FREQUENCY</td>
		<td>KW </td>
		<td>KVA</td>
	 </tr>  ";
	echo " <tr class='success'>";
	echo " <td> ".  $row['VOLT']   ." </td>"; 
	echo " <td> ".  $row['AMBER']   ." </td>";
    echo " <td> ".  $row['FREQUENCY']   ." </td>";
	echo " <td> ".  $row['KILOW']   ." </td>"; 
	echo " <td> ".  $row['KILOVA']   ." </td>"; 
	


	 echo "</tr></tr>	  </tbody> </table> ";
	
}
?>