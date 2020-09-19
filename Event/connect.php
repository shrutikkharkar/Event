

<?php
	$Event_name = $_POST['Event_name'];
    $fname = $_POST['fname'];
    $Stud_id  = $_POST['Stud_id'];
    $email_id = $_POST['email_id'];
    $contact_no  = $_POST['contact_no'];
    $Year = $_POST['Year'];
    $dept = $_POST['dept'];
	


	// Database connection
	$conn = new mysqli('localhost','root','','event');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

		$stmt = $conn->prepare("insert into event1(Event_name,fname,Stud_id,email_id,contact_no,Year,dept) values(? ,?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $Event_name,$fname, $Stud_id, $email_id, $contact_no, $Year, $dept);

		// $stmt = $conn->prepare("insert into event2(fname2,Stud_id2,email_id2,contact_no2,Year2,dept2) values(?, ?, ?, ?, ?, ?)");
		// $stmt->bind_param("ssssss", $fname, $Stud_id, $email_id, $contact_no, $Year, $dept);

		$execval = $stmt->execute();
		echo $execval;	
		echo "You have successfully registered";

		
		$stmt->close();
		$conn->close();
	}
?>
<html><a href="registration.php">Back</a></html>