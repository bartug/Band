<?php
#root un yanındaki boşluk mysql parolan
@$baglanti = new mysqli('localhost', 'root', '', 'band'); 
    if(mysqli_connect_error()) 
    {
        echo mysqli_connect_error();
        exit; 
    }

$baglanti->set_charset("utf8"); 

?>