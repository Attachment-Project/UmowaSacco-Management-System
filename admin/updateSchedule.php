<!DOCTYPE html>
<html>
<head>
	<title>Update Schedule</title>
	<style>
		form {
			margin: 0 auto;
			max-width: 600px;
			background-color: white;
			padding: 20px;
			color: blue;
			text-align: center;
			font-family: Arial, sans-serif;
		}

		label {
			display: inline-block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="text"], input[type="date"] {
			padding: 10px;
			margin-bottom: 20px;
			width: 100%;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: white;
			color: blue;
			border: none;
			padding: 10px;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	
    <?php

    include("db.php");
    $id = $_GET['id'];

    // select the record from the database
    $query = "SELECT * FROM schedule_nai_macha WHERE schedule_id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    // close the database connection
mysqli_close($conn);
    ?>

	<form method="post" action="updateSchedule_Nai_Macha_db.php">
		<h2>Update Schedule</h2>

        <label for="scheduleId">Schedule Id:</label>
		<input type="text" name="schedule_id" id="matatu_numplate" value="<?php echo $row['schedule_id']; ?>" required>
        <br>
		<label for="matatu_numplate">Matatu Number Plate:</label>
		<input type="text" name="matatu_numplate" id="matatu_numplate" value="<?php echo $row['matatu_numplate']; ?>" required>

		<label for="dep1_t1">Departure 1 Time 1
        :</label>
<input type="time" name="dep1_t1" id="dep1_t1" value="<?php echo $row['dep1_t1']; ?>" required>
<br> 
<label for="arrival1_t1">Arrival 1 Time 1:</label>
	<input type="time" name="arrival1_t1" id="arrival1_t1" value="<?php echo $row['arrival1_t1']; ?>" required>
<br>
	<label for="dep2_t1">Departure 2 Time 1:</label>
	<input type="time" name="dep2_t1" id="dep2_t1" value="<?php echo $row['dep2_t1']; ?>" required>
 <br>
	<label for="arrival2_t1">Arrival 2 Time 1:</label>
	<input type="time" name="arrival2_t1" id="arrival2_t1" value="<?php echo $row['arrival2_t1']; ?>" required>
 <br>
	<label for="date">Date:</label>
	<input type="date" name="date" id="date" value="<?php echo $row['date']; ?>" required>
<br>
	<label for="dep1_t2">Departure 1 Time 2:</label>
	<input type="time" name="dep1_t2" id="dep1_t2" value="<?php echo $row['dep1_t2']; ?>" required>
<br>
	<label for="arrival1_t2">Arrival 1 Time 2:</label>
	<input type="time" name="arrival1_t2" id="arrival1_t2" value="<?php echo $row['arrival1_t2']; ?>" required>
<br>
	<label for="dep2_t2">Departure 2 Time 2:</label>
	<input type="time" name="dep2_t2" id="dep2_t2" value="<?php echo $row['dep2_t2']; ?>" required>
<br>
	<label for="arrival2_t2">Arrival 2 Time 2:</label>
	<input type="time" name="arrival2_t2" id="arrival2_t2" value="<?php echo $row['arrival2_t2']; ?>" required>
<br>
	<input type="submit" name="submit" value="Update">
    <a href="./viewSchedule_Nai_Macha.php">Back</a>
    </form>
   
</body>
</html>