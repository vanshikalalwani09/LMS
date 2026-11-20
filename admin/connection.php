<?php
   
    $db= mysqli_connect("localhost:3306","root","","library");
if(!$db)
{
    die("Connection failed:" . mysqli_connect_error());

}
echo "Connected successfully.";

?>