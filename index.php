<?php 
include('database.php');  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>SERDAR BAND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="index.php">SerdarBand</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="#band">Hakkımızda</a></li>
                    <li><a href="#tour">Sahne Listemiz</a></li>
                    <li><a href="login.php">Konser Ekle</a></li>

                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
       
        <ol class="carousel-indicators">
            <li data-target="1.jpg" data-slide-to="0" class="active"></li>
            <li data-target="2.png" data-slide-to="1"></li>
            <li data-target="3.jpg" data-slide-to="2"></li>
        </ol>

       
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="1.jpg" alt="New York" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Buca</h3>
                    <p>Harika Atmosfer.</p>
                </div>
            </div>

            <div class="item">
                <img src="2.png" alt="Chicago" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Tınaztepe</h3>
                    <p>Zirvedeyim.</p>
                </div>
            </div>

            <div class="item">
                <img src="3.jpg" alt="Los Angeles" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Kuruçeşme</h3>
                    <p>S E M T İ M İ Ç İ N !</p>
                </div>
            </div>
        </div>

       
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

 
    <div id="band" class="container text-center">
        <h3>SerdarBand</h3>

        <p>
            Tınaztepeden başlayan akım tüm bucayı sardı. SerdarBand Sizinle ! 20 liraya Hokkabaz gibi sahne alırım. <br> M Ü Z İ K İ Ç İ N !

        </p>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p class="text-center"><strong>SERDAR</strong></p><br>

                <p>Vokalist</p>
                <p>Kuruçeşme'de Müzik Yapmayı Seviyor.</p>
                <p>2010'da Grubu Kurdu</p>

            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>PİPES</strong></p><br>

                <p>Davul</p>
                <p>Kemirmeyi Sever.</p>
                <p>2012'de Gruba Katıldı.</p>

            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>YAMAN</strong></p><br>

                <p>Bass Gitarist</p>
                <p>Bilgisayar Kurdu.</p>
                <p>2011'den Beri Üye</p>

            </div>
        </div>
    </div>

    <!-- Listeleme-->
    <div id="tour" class="bg-1">
        <div class="container">
            <h3 class="text-center">Konser Listesi</h3>
            <table class="table">
    
                <tr>
                    <th>Konser Yeri</th>
                    <th>Konser Saati</th>
                    <th>Yaş Sınırı</th>
                    <th>Ücret</th>
                    <th></th>
                    <th></th>
                </tr>
            
                <?php 
            $sorgu = $baglanti->query("SELECT * FROM band"); 
            
            while ($sonuc = mysqli_fetch_assoc($sorgu)) { 
            $id = $sonuc['id'];
            $Yer = $sonuc['Yer']; 
            $Saat = $sonuc['Saat'];
            $Yas = $sonuc['Yas'];
            $Ücret = $sonuc['Ücret'];
            ?>
                <tr>
                  
                    <td><?php echo $Yer; ?></td>
                    <td><?php echo $Saat; ?></td>
                    <td><?php echo $Yas; ?></td>
                    <td><?php echo $Ücret; ?></td>
                    <td><a href="edit.php?id=<?php echo $id; ?>" class="btn btn-dark">Düzenle</a></td>
                    <td><a href="delete.php?id=<?php echo $id; ?>" class="btn btn-secondary">Sil</a></td>
                </tr>
            <?php 
            } 
            ?>
            </table>
        </div>
    </div>

   

    <div><!-- Footer -->
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Copyright ©2019</p>
    </footer>
    </div>


</body>

</html>