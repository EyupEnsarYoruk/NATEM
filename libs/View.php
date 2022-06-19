<?php

    class View {

        public function goster ($dosyaad, array $veri=null) {

            require "views/".$dosyaad.'.php';

        }

    }

?>