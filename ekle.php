<?php 
include('database.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ekleme</title>
    <link rel="stylesheet" href="style.css">
    
  
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
           
                <a class="navbar-brand" href="index.php">SerdarBand</a>
            </div>
            
        </div>
    </nav>
<div class="container">
    <div class="col-md-12">
    <h4>Lütfen Konser Girerken saati 20:15 formatında giriniz!</h4>
        <form action="" method="post">
    
         <table class="table">
        
               <tr>
                   <td>Konser Yeri</td>
                   <td><input type="text" name="Yer" class="form-control" ></td>
                 </tr>

                  <tr>
                   <td>Saati</td>
                     <td><input type="text" name="Saat" class="form-control" ></td>
                  </tr>
               <tr>
                  <td>Yaş Sınırı</td>
                     <td><input type="text" name="Yas" class="form-control" ></td>
                </tr>
                 <tr>
                     <td>Ücret</td>
                        <td><input type="text" name="Ücret" class="form-control" ></td>
                  </tr>

        <tr>
            <td></td>
            <td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
        </tr>

    </table>

</form>






<?php 

if ($_POST) { 

    $Yer = $_POST['Yer']; 
    $Saat = $_POST['Saat'];
    $Yas = $_POST['Yas'];
    $Ücret = $_POST['Ücret'];
    if ($Yer<>"" && $Saat<>""&&$Yas<>"" && $Ücret<>"") { 
            if ($baglanti->query("INSERT INTO band (Yer, Saat,Yas,Ücret) VALUES ('$Yer','$Saat','$Yas','$Ücret')")) 
            {
               echo "<script> alert('Konser eklendi')</script>";
               header("location:index.php"); 

            }
            else
            {
                echo "<script> alert('Hata Oluştu')</script>";
            }
    
        }
    
}
?>
</div>
</div>
</body>
<footer class="footer">
    <div class="container-fluid">
        <p class="text-muted" style="color:rgb(102, 150, 223);font-family: Tahoma,Arial;padding-top:5px;text-align: center">Copyright ©2019</p>
    </div>
</footer>
</html>