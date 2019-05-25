<?php 

if ($_GET) 
{

include("database.php");

if ($baglanti->query("DELETE FROM band WHERE id =".(int)$_GET['id'])) 
{
    header("location:index.php"); 
}
}

?>