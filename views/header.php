<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL ?>/views/design/css/style.css">
    <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.14/dist/jquery-input-mask-phone-number.js"></script>
</head>
<body class="d-flex flex-column">
    <div class="container-fluid d-flex flex-column" style="flex: 1 0 auto;">
        <div class="row header">
            <div class="col-md-2 d-sm-none d-md-flex row " style="align-items: center;">
                <div class="col-12 text-center h-100"><img class="img-fluid h-100 mdlogo" src="<?php echo URL ?>/views/design/images/logo.jpg" alt="" /></div>
            </div>
            <div class="col-md-10 col-sm-12">
                <div class="row bolum" style="align-items: center;">
					<div class="col-sm-2 d-none d-sm-block d-md-none row" style="align-items: center;">
						<div class="col-12 text-center"><img class="img-fluid smlogo" src="<?php echo URL ?>/views/design/images/logo.jpg" alt="" /></div>
					</div>
                    <div class="col-12 col-sm-3  col-md-3 text-center order-2 d-none d-sm-block order-sm-1 telno"><b>İletişim 0850 480 07 90</b></div>
                    <div class="col-12 col-sm-3  col-md-3 text-center order-3 d-none d-sm-block order-sm-2 telno"><b>İletişim 0850 480 07 91</b></div>
                    <div class="col-12 col-sm-4 col-md-6 row text-center order-1 order-sm-3">
                        
                       <?php if(Session::get("komisyoncutelefon") && Session::get("komisyoncuId")): 
                        Session::oturumKontrol("komisyoncu", "where telefon='".Session::get("komisyoncutelefon")."' and id=".Session::get("komisyoncuId")); ?>     
							<div class="col-6 text-center col-md-4">
                                <a href="<?php echo URL ?>/Uye/komisyoncuForm" class="btn btn-danger btn-sm mt-2 uyegiris">Formu Düzenle</a>
                            </div>
                            <div class="col-6 text-center col-md-4">
                                <a href="<?php echo URL ?>/Uye/cikis" class="btn btn-danger btn-sm mt-2 uyegiris">Çıkış Yap</a>
                            </div>
                        <?php elseif(Session::get("nakliyeciplaka") && Session::get("nakliyeciId")): 
                        Session::oturumKontrol("nakliyeci", "where plaka='".Session::get("nakliyeciplaka")."' and id=".Session::get("nakliyeciId"));?>     
                            <div class="col-6 text-center col-md-4">
                                <a href="<?php echo URL ?>/Uye/nakliyeciForm" class="btn btn-danger btn-sm mt-2 uyegiris">Formu Düzenle</a>
                            </div>
                            <div class="col-6 text-center col-md-4">
                                <a href="<?php echo URL ?>/Uye/cikis" class="btn btn-danger btn-sm mt-2 uyegiris">Çıkış Yap</a>
                            </div>
                        <?php else: ?>
                            <div class="col-6">
								<div class="d-sm-inline d-block">
									<img class="img-fluid ulogo " src="<?php echo URL ?>/views/design/images/ulogo.png" alt="" />
								</div>
                                <a href="<?php echo URL ?>/Uye/Giris" class="btn btn-danger btn-sm mt-2 uyegiris"> ÜYE GİRİŞ</a>
                            </div>
                            <div class="col-6 ">
								<div class="d-sm-inline d-block">
								    <img class="img-fluid 724logo" src="<?php echo URL ?>/views/design/images/724logo.png" alt="" />                               					
								</div>
							   <a href="<?php echo URL ?>/Uye/uyeOl" class="btn btn-danger btn-sm mt-2 uyegiris">ÜYE OL</a>
                            </div>
					   <?php endif; ?>
                        
                    </div>
                </div>
                <div class="row bolum" style="align-items: center;">
				<!-- Navbar start -->
				<nav class="navbar navbar-expand-sm navbar-light" style="background:transparent!important;">
					<div class="container-fluid">
					<div class="nav-iletisim d-sm-none">
						<div class="col-12 col-sm-3 col-md-4 text-center order-2 order-sm-1"><b style="font-size: 18px;">İletişim 0850 480 07 90</b></div>
						<div class="col-12 col-sm-3 col-md-4 text-center order-3 order-sm-2"><b style="font-size: 18px;">İletişim 0850 480 07 90</b></div>
					</div>
					<button class="bg-danger navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav d-none d-sm-block  header-ul">
							    <li class="nav-item"><a href="<?php echo URL ?>/">Anasayfa</a></li>
							  <li class="nav-item"><a href="#">Kuruluş</a></li>
							  <li class="nav-item"><a href="#">Ölçüler</a></li>
							  <li class="nav-item"><a href="#">Vukuat Bildir</a></li>
							  <li class="nav-item"><a href="#">Ekstralar</a></li>
							  <li class="nav-item"><a href="#">Araç Bildir</a></li>
							  <li class="nav-item"><a href="#">Sıra Öğren</a></li>
							  <li class="nav-item"><a href="#">Fiyatlar</a></li>
							  <li class="nav-item"><a href="#">İletişim</a></li>
							  <li class="nav-item"><a href="#">Diğer</a></li>
						</ul>
						<ul class="navbar-nav header-ul  d-block d-sm-none mobile-collapse">
							<div class="container">
							<div class="row">
								<div class="w-50">
							  <li class="nav-item d-block text-center"><a href="<?php echo URL ?>/">Anasayfa</a></li>
							  <li class="nav-item d-block text-center"><a href="#">Kuruluş</a></li>
							  <li class="nav-item d-block text-center"><a href="#">Ölçüler</a></li>
							  <li class="nav-item d-block text-center"><a href="#">Vukuat Bildir</a></li>
							  <li class="nav-item d-block text-center"><a href="#">Ekstralar</a></li>
						</div>
						<div class="w-50">
								  <li class="nav-item d-block text-center"><a href="#">Araç Bildir</a></li>
								  <li class="nav-item d-block text-center"><a href="#">Sıra Öğren</a></li>
								  <li class="nav-item d-block text-center"><a href="#">Fiyatlar</a></li>
								  <li class="nav-item d-block text-center"><a href="#">İletişim</a></li>
								  <li class="nav-item d-block text-center"><a href="#">Diğer</a></li>
							</div>
								</div>
							</div>
							</ul>
						</div>
						</div>
					</nav>
					<!-- Navbar end -->
                </div>
            </div>
        </div>