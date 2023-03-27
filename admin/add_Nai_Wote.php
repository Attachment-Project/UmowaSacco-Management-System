<!DOCTYPE html>
<html>
<head>
	<title>Route: Nairobi - Wote</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #007bff;
			text-align: center;
		}
		form {
			max-width: 500px;
			margin: 0 auto;
			background-color: #ffffff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
		}
		input[type=text], select, input[type=time], input[type=date] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			background-color: #007bff;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
		}
		input[type=submit]:hover {
			background-color: #0069d9;
		}
		button[type=button] {
			background-color: #007bff;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: left;
		}
		button[type=button]:hover {
			background-color: #0069d9;
		}
	</style>
</head>
<body>
	<h1>Route: Nairobi - Wote</h1>
	<form method="post" action="schedule_nai_wote.php">
		<label for="matatu_numplate">Matatu NumPlate:</label>
		<select name="matatu_numplate">
			<?php
			include('db.php');
			$query = "SELECT numplate FROM matatus WHERE RouteFrom='Nairobi' AND RouteTo='Wote'";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<option value='" . $row['numplate'] . "'>" . $row['numplate'] . "</option>";
			}
			mysqli_close($conn);
			?>
		</select>
		<h2>Trip 1</h2>
        <label for="date">Date:</label>
		<input type="date" id="date" name="date">
		<label for="dep1_t1">Departure 1 Time:</label>
		<input type="time" id="dep1_t1" name="dep1_t1">
		<label for="arrival1_t1">Arrival 1 Time:</label>
		<input type="time" id="arrival1_t1" name="arrival1_t1">
		<label for="dep2_t1">Departure 2 Time:</label>
		<input type="time" id="dep2_t1" name="dep2_t1">
		<label for="arrival2_t1">Arrival 2 Time:</label>
		<input type="time" id="arrival2_t1" name="arrival2_t1">

		<h2>Trip 2</h2>
		<label for="dep1_t2">Departure 1 Time:</label>
		<input type="time" id="dep1_t2" name="dep1_t2"><br><br>
        <label for="arrival1_t2">Arrival 1 Time:</label>
	<input type="time" id="arrival1_t2" name="arrival1_t2"><br><br>

	<label for="dep2_t2">Departure 2 Time:</label>
	<input type="time" id="dep2_t2" name="dep2_t2"><br><br>

	<label for="arrival2_t2">Arrival 2 Time:</label>
	<input type="time" id="arrival2_t2" name="arrival2_t2"><br><br>

	<div class="button-container">
		<input type="submit" value="Submit">
		<a href="./loggedin.php" class="back-button">Back</a>
	</div>
</form>
</div>
<style>
	form {
		text-align: center;
		margin: auto;
	}
	h2 {
		color: blue;
	}
	.button-container {
		margin-top: 20px;
	}
	.back-button {
		display: inline-block;
		background-color: #999;
		color: #fff;
		padding: 10px 20px;
		border-radius: 5px;
		text-decoration: none;
		margin-right: 10px;
	}
	.back-button:hover {
		background-color: #333;
	}
</style>
