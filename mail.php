<?php
if (isset($_REQUEST['name_1']))  {

  $name_1 = $_REQUEST['name_1'];
  $status = $_REQUEST['status'];
  $type = $_REQUEST['type'];
  $number_of_evening_guests = $_REQUEST['number_of_evening_guests'];
  $starter_1 = $_REQUEST['starter_1'];
  $main_1 = $_REQUEST['main_1'];
  $starter_2 = $_REQUEST['starter_2'];
  $main_2 = $_REQUEST['main_2'];

  $message = "From: $name_1\n\nStatus: $status\n\n";
  $message .= "Status: $type\n";
  $message .= "Number of evening guests: $number_of_evening_guests\n";
  $message .= "Starter_1: $starter_1\nMain_1: $main_1\n\n";
  $message .= "Starter_2: $starter_2\nMain_2: $main_2\n\n";

  //send email
  mail("davedx@gmail.com", "Wedding RSVP", $message, "From: automailer@laradave.nl");

  header("Location: http://laradave.nl/index.html#rsvp_thanks");
  die();
}
?>