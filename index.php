<?php
$pass = $_POST['pass'];

if($pass == "10062018")
{
        include("wedding.html");
}
else
{
    if(isset($_POST))
    	include("login.html");
}
?>