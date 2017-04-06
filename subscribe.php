<?php
$name=$_POST['name'];
?>

<?php
$email_from='smills1149@gmail.com';
$email_subject="new person";
$email_body="here's the new person: $name.\n".
?>

<?php
$to="smills1149@gmail.com";
$headers="From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);
?>