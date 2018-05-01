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
            Enter Password: <input type="password" name="pass"></input><br><br>
            <input type="submit" name="submit" value="Submit"></input>
            </form>
    <?}
}
?>