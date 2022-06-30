<?php 

    class Aracbildir extends Controller {

        function __construct () {

            parent:: libsInclude(array("View", "Form", "Bilgi"));

            @Session::init();
			
			$this->ModelYukle("aracbildir");

        }
		
		function index() {

            $this->View->goster("sayfalar/aracbildir");

        }
		
		
		
		
    }

?>