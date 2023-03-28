<?php
		// include the database connection file
		include 'db.php';

		// check if the form has been submitted
	
			// get the form data
			$id = $_POST['schedule_id'];
			$matatu_numplate = $_POST['matatu_numplate'];
			$dep1_t1 = $_POST['dep1_t1'];
			$arrival1_t1 = $_POST['arrival1_t1'];
			$dep2_t1 = $_POST['dep2_t1'];
			$arrival2_t1 = $_POST['arrival2_t1'];
			$date = $_POST['date'];
			$dep1_t2 = $_POST['dep1_t2'];
			$arrival1_t2 = $_POST['arrival1_t2'];
			$dep2_t2 = $_POST['dep2_t2'];
			$arrival2_t2 = $_POST['arrival2_t2'];

			// update the record in the database
			$query = "UPDATE schedule_nai_macha SET matatu_numplate='$matatu_numplate', dep1_t1='$dep1_t1', arrival1_t1='$arrival1_t1', dep2_t1='$dep2_t1', arrival2_t1='$arrival2_t1', date='$date', dep1_t2='$dep1_t2', arrival1_t2='$arrival1_t2', dep2_t2='$dep2_t2', arrival2_t2='$arrival2_t2' WHERE schedule_id='$id'";
			$result = mysqli_query($conn, $query);

			if ($result) {
				echo "<script>alert('Record updated successfully.'); window.location = 'viewSchedule_Nai_Macha.php';</script>";
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}
			
		
	?>
