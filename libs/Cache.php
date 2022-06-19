<?php

  class Cache {

    public $dosya, $saniye, $control;

    function cacheControl ($gelenSaniye=false) {

      include 'config/cache.php';

      $parcala = explode('/', $_SERVER["REQUEST_URI"]);

      if(in_array(end($parcala), $CacheNo)):

        $this->control = false;

      else:

        $this->control = true;

      endif;

      if($this->control):

        if($gelenSaniye):
        
          $this->saniye = $gelenSaniye;

        else:

          $this->saniye = $CacheSure["saniye"];
        
        endif;

        $this->dosya = CACHEYOL.md5($_SERVER["REQUEST_URI"]).".html";

        if(file_exists($this->dosya) && (time() - $this->saniye < filemtime($this->dosya))):

          readfile($this->dosya);

          exit();
          
        endif;
        
        ob_start();

      endif;

    }

    function cacheCreate () {

      if($this->control):

        $dosya = fopen($this->dosya, "w");

        fwrite($dosya, ob_get_contents());

        fclose($dosya);

        ob_end_flush();

      endif;

    }

  }

?>