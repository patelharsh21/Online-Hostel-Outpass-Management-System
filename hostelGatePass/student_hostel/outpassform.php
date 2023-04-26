

<!DOCTYPE html>
<html>
<head>
	<title>Gatepass form</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">  
</head>
<?php include('history_header.php')  ?>
<body >
	<form action="insert2.php" method="post">
		<table>
		<tr>
			<td>
				Name:
			</td>
			<td>
				<input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="name" required>
			</td>
		</tr>
		<tr>
			<td>
				Roll No:
			</td>
			<td>
				<input type="integer" name="rollno" required>
			</td>
		</tr>
		<tr>
			<td>
				Room no:
			</td>
			<td>
				<input type="integer" name="roomno" required>
			</td>
		</tr>
		<tr>
			<td>
				Outpass type :
			</td>
			<td>
				<input type="radio" name="outpasstype" value="hometown" required>Home town
				<input type="radio" name="outpasstype" value="od" required>ON Duty
				<input type="radio" name="outpasstype" valeu="localouting" required>Local Outing
			</td>
		</tr>
		<tr>
			<td>Out date:</td>
			<td><input type="date" name="odate" required></td>
			<td>In date:</td>
			<td><input type="date" name="idate" required></td>
		</tr>
		<tr>
			<td>Out time:</td>
			<td><input type="time" name="otime" required></td>
			<td>In time:</td>
			<td><input type="time" name="itime" required></td>
		</tr>
		<tr>
			<td>place:</td>
			<td><input type="text" name="place" required>
				
			
		</tr>
		<tr>
			<td><input type="submit" name="Request" value="Request"></td>
		</tr>
		

		</table>

	</form>


</body>
</html>