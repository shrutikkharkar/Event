<?php

$eventName = $_POST['eventName'];
$eventDescription = $_POST['eventDescription'];
$eventDate = $_POST['eventDate'];
$eventDetails = $_POST['eventDetails'];

$connect = new mysqli('localhost','root','','event');
	if($connect->connect_error){
		echo "$connect->connect_error";
		die("Connection Failed : ". $connect->connect_error);
	} else {

        $stmt = $connect->prepare("insert into event_master(eventName,eventDescription,eventDate,eventDetails) values(? ,?, ?, ?)");
		$stmt->bind_param("ssss", $eventName, $eventDescription, $eventDate, $eventDetails);

        $execval = $stmt->execute();
		echo $execval;	
		echo "Event successfully entered";

		
		$stmt->close();
		$connect->close();
	}
?>