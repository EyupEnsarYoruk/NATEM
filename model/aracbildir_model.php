<?php

    class aracbildir_model extends Model {

        function __construct () {

            parent:: __construct();

        }

        function ekle ($tabload, $sutunadlari, $veriler) {

            return $this->db->Ekle($tabload, $sutunadlari, $veriler);

        }

    }

?>