<?php 

    class Olculer extends Controller {

        function __construct () {

            parent:: libsInclude(array("View"));

			@Session::init();
			
			$this->View->goster("sayfalar/olculer");
        }
			
		
		
		
    }

?>