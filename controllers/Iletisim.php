<?php 

    class Iletisim extends Controller {

        function __construct () {

            parent:: libsInclude(array("View", "Form", "Bilgi"));

            @Session::init();
			
			$this->ModelYukle("iletisim");

        }
		
		function form () {

            $this->View->goster("sayfalar/iletisim");

        }
		
		
		function formKontrol(){
			
			$telefon = $this->Form->get("telefon")->bosmu();

            $isim = $this->Form->get("isim")->bosmu();

            $mesaj = $this->Form->get("mesaj")->bosmu();
			
			if (!empty($this->Form->error)) :

                $this->View->goster("sayfalar/iletisim", array('hata' => $this->Form->error));
            
            else:

                $sonuc = $this->model->ekle("iletisim", array('telefon', 'isim', 'mesaj'), array($telefon, $isim, $mesaj));
					
					if($sonuc==1):

                        $this->View->goster("sayfalar/iletisim", array("bilgi" => $this->Bilgi->basarili("Mesajınız Gönderildi.", "/Iletisim/form", 3, "p-3 col-6 mt-2 mb-3")));

                    else:

                        $this->View->goster("sayfalar/iletisim", array("bilgi" => $this->Bilgi->uyari("danger", "<strong>Hata var!</strong> Form gönderilemedi.", false, "p-3 col-6 mt-2 mb-3")));

                    endif;
			endif;
		}
		
    }

?>