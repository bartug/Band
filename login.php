
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
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    
<div class="container">
    <div class="col-md-12">
    <form action="login.php" method="post">
  Kullanıcı Adı: <input  class="form-control" type="text" name="username"><br>
  Parola: <input class="form-control" type="password" name="password"><br>
  <button class="btn btn-primary" type="submit">Giriş yap</button><br>
  <a href="index.php">ana sayfaya dön</a>
</form>

    </div>
</div>
</body>
<footer class="footer">
    <div class="container-fluid">
        <p class="text-muted" style="color:rgb(102, 150, 223);font-family: Tahoma,Arial;padding-top:5px;text-align: center">Copyright ©2019</p>
    </div>
</footer>
</html>


<?php



//  bu sayfada sabit bilgiler ile yönetici girişi yapılmasını sağlayacağız

//  bir formdan kullanıcı adı ve parola kaldıracağız

//  bunların bizim elimizdeki ön tanımlı bilgilerle eşleşmesi durumunda oturum verisine is_admin değerini true olarak atayacağız

//  site içindeki diğer işlemler buna dayalı olarak yapılacak

//  giriş için gerekli bilgileri önden tanımlayalım
$adminUsername = "admin";
$adminPasswordHash = "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92"; //"123456";

//   formdan gelen bilgiler ön tanımlı verilerle örtüşüyor mu diye bakalım
if(isset($_POST['username']) && isset($_POST['password'])){
  if($_POST['username']==$adminUsername && hash("sha256",$_POST['password'])==$adminPasswordHash){
    //  kullanıcının girdiği bilgiler bizimkilerle uyuşuyor, giriş yaptırıp ana sayfaya yönlendirebiliriz
    $_SESSION['is_admin'] = true;
    header("Location: ekle.php");
    die();
  }else{
    echo "Kullanıcı adı ve parola eşleşmiyor. Böyle bir yönetici yok. SEN DE YÖNETİCİ MİSİN????<hr>";
  }
}


?>