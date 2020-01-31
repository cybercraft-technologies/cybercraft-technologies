<?php
if (isset($_POST['proceed'])) {
    $name=$_POST['name'];
    $to="craftmen.cybercraft@gmail.com";
    $subject="Request";
    mail($to,$subject,$name);
    echo "Mail sent";
  }

?>
