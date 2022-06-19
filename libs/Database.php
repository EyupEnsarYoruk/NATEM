<?php

    class Database extends PDO {

        protected $dizi;

        protected $Gdizi;

        function __construct () {
            
            parent:: __construct("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET."", DB_USER, DB_PASS);

        }

        function Ekle ($tabload, $sutunadlari, $veriler) {

            $sutunsayisi = count($sutunadlari);

            for($i=0; $i<$sutunsayisi; $i++):

                $this->dizi .= "?,";

            endfor;

            $values = rtrim($this->dizi, ",");

            $sutunadlari = join(",", $sutunadlari);

            $sorgu = $this->prepare("insert into ".$tabload." (".$sutunadlari.") VALUES(".$values.")");

            if($sorgu->execute($veriler)):

                return 1;

            else:

                return 0;

            endif;

        }

        function Listele ($tabload, $kosul=false) {

            if($kosul):

                $sorgu = $this->prepare("SELECT * FROM ".$tabload." ".$kosul);

            else:

                $sorgu = $this->prepare("SELECT * FROM ".$tabload);

            endif;

            $sorgu->execute();

            return $sorgu->fetchAll();

        }

        function Sil ($tabload, $kosul) {

            $sorgu = $this->prepare("DELETE FROM ".$tabload." where ".$kosul);

            if($sorgu->execute()):

                return true;

            else:

                return false;

            endif;

        }

        function Guncelle ($tabload, $kosul) {

            $sorgu = $this->prepare("SELECT * FROM ".$tabload." where ".$kosul);

            $sorgu->execute();

            return $sorgu->fetchAll();

        }

        function GuncelSon ($tabload, $sutunadlari, $veriler, $kosul) {

            $sutunsayisi = count($sutunadlari);

            for($i=0; $i<$sutunsayisi; $i++):

                $this->dizi .= $sutunadlari[$i]."=?,";

            endfor;

            $values = rtrim($this->dizi, ",");

            $sorgu = $this->prepare("UPDATE ".$tabload." SET ".$values." where ".$kosul);

            $sorgu->execute($veriler);

            return $sorgu->rowCount()>0 ? true : false;

        }

        function Arama ($tabload, $kosul) {

            $sorgu = $this->prepare("SELECT * FROM ".$tabload." ".$kosul);

            $sorgu->execute();

            return $sorgu->fetchAll();

        }

        function GelismisArama ($getir, $tabload, $kosul) {

            $sorgu = $this->prepare("SELECT ".$getir." FROM ".$tabload." ".$kosul);

            $sorgu->execute();

            return $sorgu->fetchAll();

        }

        function TabloSecListele ($getir, $tabload, $kosul) {

            $sorgu = $this->prepare("SELECT ".$getir." FROM ".$tabload." ".$kosul);

            $sorgu->execute();

            return $sorgu->fetchAll();

        }

        function TabloBirlestirListele ($getir, $tabload1, $tabload2, $kosul) {

            $sorgu = $this->prepare("SELECT ".$getir." FROM ".$tabload1.", ".$tabload2." ".$kosul);

            $sorgu->execute();

            return $sorgu->fetchAll();

        }

        function CokluBirlestirListele ($ekozellik=false, $sutungetir, $tabload, $kosul) {

            $Gsutun = "";

            $Gtablo = "";

            foreach($sutungetir as $val):

                $Gsutun .= $val.", ";

            endforeach;

            foreach($tabload as $val):

                $Gtablo .= $val.", ";

            endforeach;
            
            $sutunlar = rtrim($Gsutun, ", ");

            $tablolar = rtrim($Gtablo, ", ");

            $sorgu = $this->prepare("SELECT ".$ekozellik." ".$sutunlar." FROM ".$tablolar." ".$kosul);

            $sorgu->execute();

            return $sorgu->fetchAll();

        }

        function GirisKontrol ($tabload, $kosul) {

            $sorgu = $this->prepare("SELECT * FROM ".$tabload." where ".$kosul);

            $sorgu->execute();
 
            if($sorgu->rowCount()>0):

                return $sorgu->fetchAll();
            
            else:

                return false;

            endif;

        }
        
    }

?>