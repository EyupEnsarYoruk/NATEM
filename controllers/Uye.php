<?php 

    class Uye extends Controller {

        function __construct () {

            parent:: libsInclude(array("View", "Form", "Bilgi"));

            Session::init();

            $this->ModelYukle("uye");

        }

        function uyeOl () {

            $this->View->goster("sayfalar/uyeol");

        }

        function giris () {

            $this->View->goster("sayfalar/giris");

        }

        function cikis () {

            Session::destroy();

            $this->Bilgi->direktYonlen("/");

        }

        function nakliyeciKayitKontrol () {

            $telefon = $this->Form->get("telefon")->bosmu();

            $plaka = $this->Form->get("plaka")->bosmu();

            $sifre = $this->Form->get("sifre")->bosmu();

            $sifretekrar = $this->Form->get("sifretekrar")->bosmu();

            if (!empty($this->Form->error)) :

                $this->View->goster("sayfalar/uyeol", array('hata' => $this->Form->error));
            
            else:

                $sifre = $this->Form->sifreKarsilastir($sifre, $sifretekrar);

                if (!empty($this->Form->error)) :

                    $this->View->goster("sayfalar/uyeol", array('hata' => $this->Form->error));
                
                else:

                    $sonuc = $this->model->ekle("nakliyeci", array('telefon', 'plaka', 'sifre'), array($telefon, $plaka, $sifre));

                    if($sonuc==1):

                        $this->View->goster("sayfalar/uyeol", array("bilgi" => $this->Bilgi->basarili("Kayıt başarılı.", "/Uye/giris", 3, "p-3 col-6 mt-2 mb-3")));

                    else:

                        $this->View->goster("sayfalar/uyeol", array("bilgi" => $this->Bilgi->uyari("danger", "<strong>Hata var!</strong> Kayıt esnasında hata oluştu.", false, "p-3 col-6 mt-2 mb-3")));

                    endif;

                endif;

            endif;

        }

        function nakliyeciGirisKontrol () {

            $plaka = $this->Form->get("plaka")->bosmu();

            $sifre = $this->Form->get("sifre")->bosmu();

            if (!empty($this->Form->error)) :

                $this->View->goster("sayfalar/giris", array('hata' => $this->Form->error));

            else:

                $sifre = $this->Form->sifrele($sifre);

                $sonuc = $this->model->giriskontrol("nakliyeci", "plaka='$plaka' and sifre='$sifre'");

                if($sonuc):

                    Session::init();

                    Session::set("nakliyeciplaka", $sonuc[0]["plaka"]);

                    Session::set("nakliyeciId", $sonuc[0]["id"]); // üyenin id'sini taşıyacağım

                    $this->Bilgi->direktYonlen("/Uye/nakliyeciForm");

                else:

                    $this->View->goster("sayfalar/giris", array("bilgi" => $this->Bilgi->uyari("danger", "<strong>Hata var!</strong> Plaka veya şifre hatalı.", false, "p-3 col-6 mt-2 mb-3")));

                endif;

            endif;

        }

        function nakliyeciForm () {

            $this->View->goster("sayfalar/nakliyeciform");

        }

        function komisyoncuKayitKontrol () {

            $telefon = $this->Form->get("telefon")->bosmu();

            $firmaismi = $this->Form->get("firmaismi")->bosmu();

            $sifre = $this->Form->get("sifre")->bosmu();

            $sifretekrar = $this->Form->get("sifretekrar")->bosmu();

            if (!empty($this->Form->error)) :

                $this->View->goster("sayfalar/uyeol", array('hata' => $this->Form->error));
            
            else:

                $sifre = $this->Form->sifreKarsilastir($sifre, $sifretekrar);

                if (!empty($this->Form->error)) :

                    $this->View->goster("sayfalar/uyeol", array('hata' => $this->Form->error));
                
                else:

                    $sonuc = $this->model->ekle("komisyoncu", array('telefon', 'firmaismi', 'sifre'), array($telefon, $firmaismi, $sifre));

                    if($sonuc==1):

                        $this->View->goster("sayfalar/uyeol", array("bilgi" => $this->Bilgi->basarili("Kayıt başarılı.", "/Uye/giris", 3, "p-3 col-6 mt-2 mb-3")));

                    else:

                        $this->View->goster("sayfalar/uyeol", array("bilgi" => $this->Bilgi->uyari("danger", "<strong>Hata var!</strong> Kayıt esnasında hata oluştu.", false, "p-3 col-6 mt-2 mb-3")));

                    endif;

                endif;

            endif;

        }

        function komisyoncuGirisKontrol () {

            $telefon = $this->Form->get("telefon")->bosmu();

            $sifre = $this->Form->get("sifre")->bosmu();

            if (!empty($this->Form->error)) :

                $this->View->goster("sayfalar/giris", array('hata' => $this->Form->error));

            else:

                $sifre = $this->Form->sifrele($sifre);

                $sonuc = $this->model->giriskontrol("komisyoncu", "telefon='$telefon' and sifre='$sifre'");

                if($sonuc):

                    Session::init();

                    Session::set("komisyoncutelefon", $sonuc[0]["telefon"]);

                    Session::set("komisyoncuId", $sonuc[0]["id"]); // üyenin id'sini taşıyacağım

                    $this->Bilgi->direktYonlen("/Uye/komisyoncuForm");

                else:

                    $this->View->goster("sayfalar/giris", array("bilgi" => $this->Bilgi->uyari("danger", "<strong>Hata var!</strong> Telefon veya şifre hatalı.", false, "p-3 col-6 mt-2 mb-3")));

                endif;

            endif;

        }

        function komisyoncuForm () {

            $this->View->goster("sayfalar/komisyoncuform");

        }

    }

?>