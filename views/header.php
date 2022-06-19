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
            <div class="col-2 row" style="align-items: center;">
                <div class="col-12 text-center"><b>LOGO</b></div>
            </div>
            <div class="col-10">
                <div class="h-50 row" style="align-items: center;">
                    <div class="col-3 text-center"><b style="font-size: 18px;">İletişim 0850 480 07 90</b></div>
                    <div class="col-3"><b style="font-size: 18px;">İletişim 0850 480 07 90</b></div>
                    <div class="col-6 row text-end">
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                       <?php if(Session::get("komisyoncutelefon") && Session::get("komisyoncuId")): 
                        Session::oturumKontrol("komisyoncu", "where telefon='".Session::get("komisyoncutelefon")."' and id=".Session::get("komisyoncuId")); ?>     
							<div class="col-3">
                                <a href="<?php echo URL ?>/Uye/komisyoncuForm" class="btn btn-danger btn-sm mt-2 uyegiris">Formu Düzenle</a>
                            </div>
                            <div class="col-2">
                                <a href="<?php echo URL ?>/Uye/cikis" class="btn btn-danger btn-sm mt-2 uyegiris">Çıkış Yap</a>
                            </div>
                        <?php elseif(Session::get("nakliyeciplaka") && Session::get("nakliyeciId")): 
                        Session::oturumKontrol("nakliyeci", "where plaka='".Session::get("nakliyeciplaka")."' and id=".Session::get("nakliyeciId"));?>     
                            <div class="col-3">
                                <a href="<?php echo URL ?>/Uye/nakliyeciForm" class="btn btn-danger btn-sm mt-2 uyegiris">Formu Düzenle</a>
                            </div>
                            <div class="col-2">
                                <a href="<?php echo URL ?>/Uye/cikis" class="btn btn-danger btn-sm mt-2 uyegiris">Çıkış Yap</a>
                            </div>
                        <?php else: ?>
                            <div class="col-3">
                                <a href="<?php echo URL ?>/Uye/Giris" class="btn btn-danger btn-sm mt-2 uyegiris">ÜYE GİRİŞ</a>
                            </div>
                            <div class="col-2">
                                <a href="<?php echo URL ?>/Uye/uyeOl" class="btn btn-danger btn-sm mt-2 uyegiris">ÜYE OL</a>
                            </div>
					   <?php endif; ?>
                        <div class="col-2">
                            <b style="font-size:26px; color:rgb(206, 65, 0);">7 / 24</b>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
                <div class="h-50 row" style="align-items: center;">
                    <ul class="header-ul">
                        <li><a href="<?php echo URL ?>/">Anasayfa</a></li>
                        <li><a href="#">Kuruluş</a></li>
                        <li><a href="#">Ölçüler</a></li>
                        <li><a href="#">Vukuat Bildir</a></li>
                        <li><a href="#">Ekstralar</a></li>
                        <li><a href="#">Araç Bildir</a></li>
                        <li><a href="#">Sıra Öğren</a></li>
                        <li><a href="#">Fiyatlar</a></li>
                        <li><a href="#">İletişim</a></li>
                        <li><a href="#">Diğer</a></li>
                    </ul>
                </div>
            </div>
        </div>