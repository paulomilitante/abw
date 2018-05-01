<?php
$pass = $_POST['pass'];

if($pass == "10062018")
{
        include("wedding.html");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST">
            Pass <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
    <?}
}
?>