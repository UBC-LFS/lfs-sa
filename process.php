<?php

// Exit if user browsed to this form by accident
if (!$_POST['submit'] == 'submit')
{
    header("Location: index.php");
    exit;
}
else
{

  // Sanitise the POST vars
    $email = htmlspecialchars($_POST['remail']);
    $rname = htmlspecialchars($_POST['rname']);
    $sname = htmlspecialchars($_POST['sname']);
    $rposn = htmlspecialchars($_POST['rposn']);
    $bldg = htmlspecialchars($_POST['bldg']);
    $rooms = htmlspecialchars($_POST['rooms']);

  // Set the RT queue Name
    $to = "sa@landfood.ubc.ca";

  // Build the email contents
    $headers = "From: ".$rname." <".$email.">";

    $subject = "New Alarm Code Request from ".$rname;

    $message = "Date of Request: ".date("F, j, Y, g:i a")."\n\n";



    $message .= "Requestor's Name: ".$rname."\n";
    $message .= "Requestor's Email: ".$email."\n";
    $message .= "Requestor's Position: ".$rposn."\n\n";
    $message .= "Supervisor's Name: ".$sname."\n\n";
    $message .= "Building Name: ".$bldg."\n";
    $message .= "Rooms to access: ".$rooms."\n";



  // Send the message
    mail($to, $subject, $message, $headers);

  // Redirect to output completion note
    header("Location: thankyou.php");
    exit;
}

?>
