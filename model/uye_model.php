<?php

    class uye_model extends Model {

        function __construct () {

            parent:: __construct();

        }

        function giriskontrol ($tabload, $kosul) {

            return $this->db->GirisKontrol($tabload, $kosul);

        }

        function ekle ($tabload, $sutunadlari, $veriler) {

            return $this->db->Ekle($tabload, $sutunadlari, $veriler);

        }

    }

?>