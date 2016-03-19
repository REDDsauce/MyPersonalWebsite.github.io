<?php  

$Name = $_POST['name'];
$Email = $_POST['email'];
$Comment = $_POST['comment'];
$to = "smcma018@uottawa.ca";
$Subject = "New Message";

mail ($to, $Subject, $Comment, "From: " . $Name);
echo "Your message have been sent!";

?>