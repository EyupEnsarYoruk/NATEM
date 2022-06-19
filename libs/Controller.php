<?php

    class Controller {

        function libsInclude (array $ad) {

            foreach($ad as $deger):

                $this->$deger = new $deger();

            endforeach;

        }

        public function ModelYukle ($name) {

            $yol = "model/".$name."_model.php";

            if(file_exists($yol)):

                require $yol;

                $sinifName = $name."_model";

                $this->model = new $sinifName();

            endif;

        }

    }

?>