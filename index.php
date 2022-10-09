<?php

date_default_timezone_set('Europe/Istanbul');

try {

$db = new PDO("mysql:host=localhost;dbname=cv", "root", "");//soldaki

} catch ( PDOException $e ){

print $e->getMessage();

}
$query = $db->query("SELECT * FROM genel", PDO::FETCH_ASSOC);//içindeki
if ( $query->rowCount() ){

  foreach( $query as $row ){
  
	$title = $row["title"];
	$adsoyad = $row["adsoyad"];
	$twitter = $row["twitter"];
	$facebook = $row["facebook"];
	$instagram = $row["instagram"];
	$ahakkimda = $row["ahakkimda"];
	$yas = $row["yas"];;
	$ulke = $row["ulke"];
	$adres = $row["adres"];
	$email = $row["email"];
	$telefon = $row["telefon"];
	$isdurumu = $row["isdurumu"];
	$anasayfa = $row["anasayfa"];
	$hakkimda = $row["hakkimda"];
	$calisma = $row["calisma"];
	$referans = $row["referans"];
	$iletisim = $row["iletisim"];
	$cvindir = $row["cvindir"];
	$yetenekler = $row["yetenekler"];
	$tecrube = $row["tecrube"];
	$kodlama = $row["kodlama"];
	$banaulas = $row["banaulas"];
	$kisabilgi = $row["kisabilgi"];
	$diller = $row["diller"];
	$egitim = $row["egitim"];
  
  
	}
	}
  
    
	$yas = date('Y') - $yas;

?>

<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 0.2 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip"><?php echo $adsoyad; ?></a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about"><?php echo $hakkimda; ?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill"><?php echo $yetenekler; ?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio"><?php echo $calisma; ?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience"><?php echo $tecrube; ?></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact"><?php echo $iletisim; ?></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/anthony.jpg" alt="Image"/></a></div>
          <div class="h2 title"><?php $adsoyad; ?></div>
          <p class="category text-white"><?php echo $kodlama; ?></p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor"><?php echo $banaulas ?></a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor"><?php echo $cvindir; ?></a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $facebook;?>" rel="tooltip" title="Facebook üzerinden takip et"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $twitter;?>" rel="tooltip" title="Twitter üzerinden takip et"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $instagram;?>" rel="tooltip" title="Instagram üzerinden takip et"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title"><?php echo $hakkimda;?></div>
            <p><?php echo $ahakkimda; ?></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title"><?php echo $kisabilgi; ?></div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Yaş:</strong></div>
              <div class="col-sm-8"><?php echo $yas;?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $email;?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Telefon:</strong></div>
              <div class="col-sm-8"><?php echo $telefon;?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Adres:</strong></div>
              <div class="col-sm-8"><?php echo $adres;?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Dil:</strong></div>
              <div class="col-sm-8"><?php echo $diller;?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title"><?php echo $yetenekler;?></div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
	  
<?php

$query = $db->query("SELECT * FROM yeteneklerim", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
	 
	 foreach( $query as $row){	


?>
	  
        <div class="row">
		

		
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?php echo $row['ad']; ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['yuzdelik']; ?>;"></div><span class="progress-value"><?php echo $row['yuzdelik2']; ?></span>
              </div>
            </div>
          </div>
		  
		  
		  
        </div> 

<?php 

	}
	}

?>
		
      </div>
    </div>
  </div>
</div>



<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title"><?php echo $calisma;?></div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="web-development">
        <div class="ml-auto mr-auto">
          <div class="row">
		  
<?php

$query = $db->query("SELECT * FROM projeler", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
	 
	 foreach( $query as $row){	


?>		  
		  
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="<?php echo $row['resimyolu']; ?>" alt="Image"/>
                    <figcaption>
                      <div class="h4"><?php echo $row['projeAdi']; ?></div>
                      <p><?php echo $row['projeTuru']; ?></p>
                    </figcaption>
                  </figure></a></div>
            </div>
			
<?php 

}
}

?>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="graphic-design" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
		  
<?php

$query = $db->query("SELECT * FROM tasarimlar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
	 
	 foreach( $query as $row){	


?>		  
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="<?php echo $row['resimyolu']; ?>" alt="Image"/>
                    <figcaption>
                      <div class="h4"><?php echo $row['projeAdi']; ?></div>
                      <p><?php echo $row['projeTuru']; ?></p>
                    </figcaption>
                  </figure></a></div>
            </div>
			
<?php 

}
}

?>
			
          </div>
        </div>
      </div>
      <div class="tab-pane" id="Photography" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
		  
<?php

$query = $db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
	 
	 foreach( $query as $row){	


?>
		 
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="<?php echo $row['resimyolu']; ?>" alt="Image"/>
                    <figcaption>
                      <div class="h4"><?php echo $row['projeAdi']; ?></div>
                      <p><?php echo $row['projeTuru']; ?></p>
                    </figcaption>
                  </figure></a></div>
            </div>
			
<?php 

}
}

?>
			
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title"><?php echo $tecrube;?></div>
    <div class="card">
	
<?php

$query = $db->query("SELECT * FROM deneyimlerim", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
	 
	 foreach( $query as $row){	

?>

      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?php echo $row['tarih']; ?> - <?php echo $row['tarih2']; ?></p>
            <div class="h5"><?php echo $row['firma']; ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo $row['alan']; ?></div>
            <p><?php echo $row['aciklama']; ?></p>
          </div>
        </div>
      </div>
	  
<?php 

	}
	}

?>	 
	 
    </div>   
  </div>
</div>



<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title"><?php echo $egitim;?></div>
    <div class="card">
	
<?php

$query = $db->query("SELECT * FROM egitim", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
	 
	 foreach( $query as $row){	

?>
	
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo $row['tarih']; ?> - <?php echo $row['tarih2']; ?></p>
            <div class="h5"><?php echo $row['derece']; ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo $row['bolum']; ?></div>
            <p class="category"><?php echo $row['okul']; ?></p>
            <p><?php echo $row['aciklama']; ?></p>
          </div>
        </div>
      </div>
	  
<?php

}
}

?>
	  
    </div>
  </div>
</div>



<div class="section" id="reference">
  <div class="container cc-reference">
    <div class="h4 mb-4 text-center title"><?php echo $referans;?></div>
    <div class="card" data-aos="zoom-in">
      <div class="carousel slide" id="cc-Indicators" data-ride="carousel">	  
        <ol class="carousel-indicators">
          <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
          <li data-target="#cc-Indicators" data-slide-to="1"></li>
          <li data-target="#cc-Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">	
<?php

$query = $db->query("SELECT * FROM referanslar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
	 
	 foreach( $query as $row){	

?>				
          <div class="carousel-item <?php echo $row['active']; ?>">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="<?php echo $row['resimyolu']; ?>" alt="Image"/>
                <div class="h5 pt-2"><?php echo $row['isim']; ?></div>
                <p class="category"><?php echo $row['firma']; ?></p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> <?php echo $row['aciklama']; ?></p>
              </div>
            </div>			
          </div>	
<?php

}
}

?>	
      </div>	  
    </div>	
  </div>
</div>
</div>



<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/staticmap.png')">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title"><?php echo $banaulas;?></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/ibrahim.alacakal@outlook.com" method="POST">
                      <div class="p pb-3"><strong>Beni haberdar et.</strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="İsim" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Konu" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Mesajınız" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Gönder</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Adres </strong></p>
                    <p class="pb-2"><?php echo $adres;?></p>
                    <p class="mb-0"><strong>Telefon</strong></p>
                    <p class="pb-2"><?php echo $telefon;?></p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p><?php echo $email;?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    
	
	
	</div>
    
	
	
	<footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="<?php echo $facebook;?>"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="<?php echo $twitter;?>"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="<?php echo $instagram;?>"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center"><?php echo $adsoyad;?></div>
      <div class="text-center text-muted">
        <p>&copy; İbrahim ALAÇAKAL. Tüm hakları saklıdır.<br>Tasarım - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>