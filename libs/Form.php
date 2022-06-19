<?php

    class Form extends Bilgi {

        public $deger, $veri;

        public $error = array(), $sonuc = array();

        function get ($key, $control=false) {

            if($control):

                $this->veri = htmlspecialchars(strip_tags($_POST[$key]));
    
                return $this->veri;

            else:

                $this->deger = $key;

                $this->veri = htmlspecialchars(strip_tags($_POST[$key]));
    
                return $this;

            endif;

        }
        
        function bosmu ($yol=null) { 

            if(empty($this->veri) && !is_numeric($this->veri)):

                $this->error[] = $this->deger." boş olamaz!<br>";

                return $this;

            else:

                return $this->veri;

            endif;

        }

        function gercektenMailmi ($email) {

            getmxrr(substr($email, strpos($email, '@')+1), $this->sonuc);

            if(!count($this->sonuc)>0):
                
                $this->error[] = "Mail adresi geçersiz<br>";

            endif;

        }

        function sifrele ($veri) {

            return base64_encode($veri);

        }

        function coz ($veri) {
            
            return unserialize(gzuncompress(gzinflate(base64_decode($veri))));

        }

        function sifreKarsilastir ($deger1, $deger2) {

            if($deger1 != $deger2):
            
                $this->error[] = "<strong>Hata var! </strong>Girilen şifreler uyuşmamaktadır!<br>";

            else :

                return $this->sifrele($deger1);

            endif;

        }

        function checkBoxGet ($key) {

            if(!isset($_POST[$key])):

                return 0;

            else:

                if($_POST[$key] == "on"):
                    
                    return 1;

                endif;

            endif;

        } 

        function selectBoxGet ($key) {

            return $_POST[$key];

        } 

        function radioButtonGet($key) {

            return $_POST[$key];

        }

    }

?>
